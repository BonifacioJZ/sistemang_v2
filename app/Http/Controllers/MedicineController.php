<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

class MedicineController extends Controller
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
        $medicinas = Medicine::all();
        return view('medicines.index', compact('medicinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicines.create');
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
            'nombre' => ['required', 'string', 'min:1', 'max:500'],
            'dosis' => ['required', 'string', 'min:1', 'max:100000'],
            'codigo' => ['required', 'string', 'min:1', 'max:150', 'unique:medicines'],
            'formula' => ['required', 'string', 'min:1', 'max:300'],
            'laboratorio' => ['required', 'min:1', 'max:150', 'string'],
            'description' => ['required', 'min:1', 'max:150', 'string'],
        ]);
        Medicine::create([
            'nombre' => $request['nombre'],
            'dosis' => $request['dosis'],
            'codigo' => $request['codigo'],
            'formula' => $request['formula'],
            'laboratorio' => $request['laboratorio'],
            'description' => $request['description']
        ]);
        return  redirect()->route('medicine.index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicina = Medicine::find($id);
        return view('medicines.show', compact('medicina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::find($id);
        return view('medicines.edit', compact('medicine'));
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
