@extends('layouts.app')
@section('content')


<div class="container" >
    <div class="row-cols-md-6">
        <div>
            <div class="btn-group" >
                <a href="{{ route('expedient.create',$user_id) }}" class="btn btn-success">Crear Expediente</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
      <table class="table">
        <thead>
            <tr>
              <th scope="col" >ID</th>
              <th scope="col" >Fecha</th>
              <th scope="col" >Hora</th>
              <th scope="col"> Acciones </th>
            </tr>
        </thead>
        @foreach($expedientes as $expediente)
            <tbody>
                <td>{{ $expediente->id }}</td>
                <td>{{ $expediente->date }}</td>
                <td>{{ $expediente->time }}</td>
                <td> <div class="btn-group" >
                    <a href="#" class="btn btn-primary btn-sm">Ver Expediente</a>
                    <a href="#" class="btn btn-warning btn-sm">Actualizar</a>
                    <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                </div></td>
            </tbody>
        @endforeach

      </table>

    </div>
    </div>
    </div>

@endsection
