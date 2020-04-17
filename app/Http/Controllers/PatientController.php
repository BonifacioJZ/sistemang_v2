<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Carbon\Carbon;

class PatientController extends Controller
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
        $pacientes = Patient::all();
        return view('patients.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
            'name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:150'],
            'telefono' => ['max:14', 'string'],
            'colonia' => ['required', 'string'],
            'ciudad' => ['string'],
            'curp' => ['required', 'max:18', 'string', 'unique:patients'],
            'fecha_de_nacimiento' => ['required', 'date']
        ]);

        Patient::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'telefono' => $request['telefono'],
            'colonia' => $request['colonia'],
            'ciudad' => $request['ciudad'],
            'curp' => $request['curp'],
            'fecha_de_nacimiento' => $request['fecha_de_nacimiento'],
        ]);
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Patient::find($id);
        $edad = Carbon::parse($paciente->fecha_de_nacimiento)->age;
        return view('patients.show', compact('paciente', 'edad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Patient::find($id);
        return view('patients.update',compact('paciente'));
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
            'name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:150'],
            'telefono' => ['max:14', 'string'],
            'colonia' => ['required', 'string'],
            'ciudad' => ['string'],
            'curp' => ['required', 'max:18', 'string'],
            'fecha_de_nacimiento' => ['required', 'date']
        ]);
        Patient::findOrFail($id)->update([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'telefono' => $request['telefono'],
            'colonia' => $request['colonia'],
            'ciudad' => $request['ciudad'],
            'curp' => $request['curp'],
            'fecha_de_nacimiento' => $request['fecha_de_nacimiento'],
        ]);

        $paciente=Patient::find($id);
        return view('patients.update',compact('paciente'));
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
