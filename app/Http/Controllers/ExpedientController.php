<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Expedient;
use App\Medicine;
use App\Patient;

class ExpedientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $expedientes = Expedient::where(["user_id" => $user_id])->paginate(15);
        return view('expedients.index', compact('user_id', 'expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $medicinas = Medicine::all();
        return view('expedients.create', compact('id', 'medicinas'));
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
            'pulso' => ['required', 'string', 'min:1', 'max:3'],
            'respiracion' => ['required', 'string', 'min:1', 'max:3'],
            'temperatura' => ['required', 'string', 'min:1', 'max:3'],
            'presion_d' => ['required', 'string', 'min:1', 'max:3'],
            'presion_s' => ['required', 'string', 'min:1', 'max:3'],

        ]);

        $fecha = Carbon::now('America/Mexico_City');
        $hora = $fecha->hour . ":" . $fecha->minute;
        $expedient = Expedient::create([
            'pulso' => $request['pulso'],
            'respiracion' => $request['respiracion'],
            'temperatura' => $request['temperatura'],
            'presion_d' => $request['presion_d'],
            'presion_s' => $request['presion_s'],
            'patient_id' => $request['patient_id'],
            'user_id' => $request['id'],
            'date' => $fecha,
            'time' => $hora
        ]);
        if ($request->medicinas) {
            $expedient->medicines()->attach($request->medicinas);
        }

        return redirect()->route('expedient.index', $request['patient_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $expedient = Expedient::find($id);
        return view('expedients.show', compact('expedient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
