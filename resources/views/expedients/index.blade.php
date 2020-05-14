@extends('layouts.app')
@section('content')


<div class="ui segment" >
    <div class="row-cols-md-6">
        <div>
            <div>
                <a href="{{ route('expedient.create',$user_id) }}" class="ui button green ">Crear Expediente</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
      <table class="ui table stackable">
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
                    <a href="{{ route('expedient.show',$expediente->id) }}" class="ui button blue small">Ver Expediente</a>
                    <a href="#" class="ui button yellow small">Actualizar</a>
                    <a href="#" class="ui button red small">Eliminar</a>
                </div></td>
            </tbody>
        @endforeach

      </table>
      {{ $expedientes->links() }}
    </div>
    </div>
    </div>

@endsection
