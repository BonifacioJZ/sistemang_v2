<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Cita;

class CitaController extends Controller
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
    public function index()
    {
        $citas = Cita::paginate(15);
        return view('citas.citasindex', compact('citas'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citas.create');
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
            'tittle' => ['required', 'string', 'max:100'],
            'descripcion' => ['required', 'string'],
            'fecha' => ['required', 'date'],
            'hora' => ['required'],

        ]);
        $datos = explode(':', $request->hora);
        $dat = explode('-', $request->fecha);
        $fecha = Carbon::create($dat[0], $dat[1], $dat[2], $datos[0], $datos[1], 0);
        $fecha = $fecha->addMinute(15);
        $horaf = $fecha->hour . ":" . $fecha->minute;

        Cita::create([
            'title' => $request['tittle'],
            'descripcion' => $request['descripcion'],
            'fecha' => $request['fecha'],
            'hora_de_inicio' => $request['hora'],
            'hora_de_finalizacion' => $horaf,
            'status' => true,
            'user_id' => $request['id'],
            'medic_id' => 1,
            'area_id' => 1
        ]);

        return redirect()->route('cita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);
        return view('citas.citasshow', compact('cita'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id)
    {
        $cita = Cita::find($id);
        return view('citas.confirm', compact('cita'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::find($id);
        return view('citas.edit', compact('cita'));
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
        $datos = explode(':', $request->hora);
        $dat = explode('-', $request->fecha);
        $fecha = Carbon::create($dat[0], $dat[1], $dat[2], $datos[0], $datos[1], 0);
        $fecha = $fecha->addMinute(15);
        $horaf = $fecha->hour . ":" . $fecha->minute;
        Cita::findOrFail($id)->update([
            'title' => $request['tittle'],
            'descripcion' => $request['descripcion'],
            'fecha' => $request['fecha'],
            'hora_de_inicio' => $request['hora'],
            'hora_de_finalizacion' => $horaf,
            'status' => true,
            'user_id' => $request['id'],
            'medic_id' => 1,
            'area_id' => 1
        ]);
        $cita = Cita::find($id);
        return view('citas.citasshow', compact('cita'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cita::findOrFail($id)->delete();
        return redirect()->route('cita.index');
    }
}
