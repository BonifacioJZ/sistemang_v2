@extends('layouts.app')
@section('content')

<div class="container" >
    <div class="row-cols-md-6">
        <div>
            <div class="btn-group" >
                <a href="{{ route('patient.create') }}" class="btn btn-success">Crear Paciente</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
      <table class="table">
        <thead>
            <tr>
              <th scope="col" >Nombre</th>
              <th scope="col" >Fecha de Nacimeinto</th>
              <th scope="col" >Curp</th>
              <th scope="col"> Acciones </th>
            </tr>
        </thead>

        @foreach($pacientes as $pacientes )
            <tbody>
                <td>{{ $pacientes->name }}  {{ $pacientes->last_name }}</td>
                <td>{{ $pacientes->fecha_de_nacimiento }}</td>
                <td>{{ $pacientes->curp }}</td>
                <td> <div class="btn-group" >
                    <a href="{{ route('patient.show',$pacientes->id) }}" class="btn btn-primary btn-sm">Ver Paciente</a>
                    <a href="{{ route('patient.edit',$pacientes->id) }}" class="btn btn-warning btn-sm">Actualizar</a>
                </div></td>
            </tbody>
        @endforeach

      </table>

    </div>
    </div>
    </div>


@endsection
