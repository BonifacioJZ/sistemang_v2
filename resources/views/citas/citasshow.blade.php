@extends('layouts.app')

@section('content')

<div class="ui segment">
  <div class="ui unstackable items">
    <div class="item">
      <div class="content">
        <a class="header">Cita {{  $cita->title}}</a>
        <div class="meta">
          <span>Descripcion</span>
        </div>
        <div class="description">
          <p> {{  $cita->descripcion }}</p>
        </div>
        <div class="meta">
          <span>Fecha</span>
        </div>
        <div class="description">
          <p> {{ $cita->fecha }}</p>
        </div>
        <div class="meta">
          <span>Hora</span>
        </div>
        <div class="description">
          <p> {{ $cita->hora_de_inicio }}</p>
        </div>
        <div class="description">
          <a class="ui fluid yellow button" href="{{route('cita.edit',$cita->id)}}">Editar</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
