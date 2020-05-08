@extends('layouts.app')
@section('content')

<div class="ui segment" >
    <div class="row-cols-md-6">
        <div>
            <div class="btn-group" >
                <a href="{{ route('patient.create') }}" class="ui button green ">Registrar Paciente</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
        <table class="ui celled table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th>Curp</th>
                <th>Acciones</th>
             </tr>
        </thead>
           @foreach($pacientes as $paciente)
           <tbody>
            <tr>
              <td>{{ $paciente->name }}  {{ $paciente->last_name }}</td>
              <td>{{ $paciente->fecha_de_nacimiento }}</td>
              <td>{{ $paciente->curp }}</td>
              <td>
                <a href="{{ route('patient.show',$paciente->id) }}" class="ui button blue ">Ver Paciente</a>
                <a href="{{ route('patient.edit',$paciente->id) }}" class="ui button yellow">Actualizar</a>
              </td>
            </tr>
          </tbody>
           @endforeach
          </table>

    </div>
    </div>
    </div>


@endsection
