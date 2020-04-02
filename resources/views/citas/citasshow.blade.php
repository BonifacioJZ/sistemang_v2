@extends('layouts.app')

@section('content')

<div class="container">
        <div class="card text-center">
            <div class="card-header">
                Cita para la Fecha {{ $cita->fecha }} a las {{ $cita->hora_de_inicio }} hasta {{ $cita->hora_de_finalizacion }}

            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $cita->title }}</h5>
              <p class="card-text">{{ $cita->descripcion }}</p>
              Creada por: <span class="card-text" >{{ $cita->user->name }} {{ $cita->user->last_name }}</span>
              <br>
              @if ($cita->status)
              <div class="alert alert-primary " role="alert">
                Activa
              </div>
              @else
              <div class="alert alert-danger" role="alert">
                Cancelada
              </div>
              @endif<br>
              <div class="btn-group btn-group " >
                <a href="{{ route('cita.edit',$cita->id) }}" class="btn btn-warning">Editar</a>
            </div>
            </div>
          </div>

</div>

@endsection
