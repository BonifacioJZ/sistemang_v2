@extends('layouts.app')
@section('content')
<div class="ui segment">
    <div class="ui unstackable items">
      <div class="item">
        <div class="content">
          <a class="header">Paciente {{ __($paciente->name) }} {{ __($paciente->last_name) }} </a>
          <div class="meta">
            <span>Fecha de Nacimiento</span>
          </div>
          <div class="description">
            <p> {{  __($paciente->fecha_de_nacimiento) }}</p>
          </div>
          <div class="meta">
            <span>Edad</span>
          </div>
          <div class="description">
            <p> {{  __($edad) }}</p>
          </div>
          <div class="meta">
            <span>Telefono</span>
          </div>
          <div class="description">
            <p> {{  __($paciente->telefono) }}</p>
          </div>
          <div class="meta">
                <span>Curp</span>
          </div>
          <div class="description" >
              <p>{{__($paciente->curp)}}</p>
          </div>
          <div class="meta">
            <span>Comunidad</span>
          </div>
          <div class="description" >
            <p>{{__($paciente->colonia)}} {{ __($paciente->ciudad) }}</p>
          </div>
          <div class="description">
            <a class="ui fluid green button" href="{{route('expedient.index',$paciente->id)}}">Expedientes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
