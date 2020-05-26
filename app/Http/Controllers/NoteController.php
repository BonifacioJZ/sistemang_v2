<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Carbon\Carbon;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $notes = Note::where(['expedient_id' => $id])->paginate(15);
        return view('notes.index', compact('id', 'notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('notes.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => ['required', 'string', 'min:1', 'max:100'],
            'nota' => ['required', 'string', 'min:1', 'max:100000'],
        ]);
        $fecha = Carbon::now('America/Mexico_City');
        $hora = $fecha->hour . ":" . $fecha->minute;
        Note::create(
            [
                'titulo' => $request['titulo'],
                'nota' => $request['nota'],
                'expedient_id' => $request['expedient'],
                'user_id' => $request['id'],
                'date' => $fecha,
                'hora' => $hora
            ]
        );
        return redirect()->route('note.index', $request['expedient']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::find($id);
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);
        return view('notes.update', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titulo' => ['required', 'string', 'min:1', 'max:100'],
            'nota' => ['required', 'string', 'min:1', 'max:100000'],
        ]);

        Note::findOrFail($id)->update([
            'titulo' => $request['titulo'],
            'nota' => $request['nota'],
            'expedient_id' => $request['expedient'],
            'user_id' => $request['id']
        ]);
        return redirect()->route('note.show', $id);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);
        $expedient = $note['expedient_id'];
        Note::findOrFail($id)->delete();
        return redirect()->route('note.index', $expedient);
    }
}
