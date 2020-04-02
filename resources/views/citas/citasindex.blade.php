@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row-cols-md-6">
        <div>
            <div class="btn-group" >
                <a href="{{ route('cita.create') }}" class="btn btn-success">Crear Cita</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
      <table class="table">
        <thead>
            <tr>
              <th scope="col" >Titulo</th>
              <th scope="col" > Descripcion</th>
              <th scope="col" > Fecha </th>
              <th scope="col"> Hora</th>
              <th scope="col"> Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
                @if($cita->status)
                <tbody>
                    <th scope="row" >{{ $cita->title }}</th>
                    <th>{{ $cita->descripcion }}</th>
                    <th>{{ $cita->fecha }}</th>
                    <th>{{ $cita->hora_de_inicio }}</th>
                    <th>
                        <div class="btn-group" >
                            <a href="{{ route('cita.show',$cita->id) }}" class="btn btn-primary btn-sm">Ver Cita</a>
                            <a href="{{ route('cita.confirm',$cita->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                    </th>
                </tbody>
                @endif
            @endforeach

      </table>

    </div>
    </div>
    </div>
@endsection

