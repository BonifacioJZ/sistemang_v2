@extends('layouts.app')
@section('content')
<div class="ui segment">
    <div class="ui unstackable items">
      <div class="item">
        <div class="content">
          <a class="header">Medicina {{  $medicina->nombre}}</a>
          <div class="meta">
            <span>Codigo</span>
          </div>
          <div class="description">
            <p> {{  $medicina->codigo }}</p>
          </div>
          <div class="meta">
            <span>Descripcion</span>
          </div>
          <div class="description">
            <p> {{  $medicina->description }}</p>
          </div>
          <div class="meta">
            <span>Laboratorio</span>
          </div>
          <div class="description">
            <p> {{  $medicina->laboratorio }}</p>
          </div>
          <div class="meta">
            <span>Dosis</span>
          </div>
          <div class="description" >
              <p>{{$medicina->dosis}}</p>
          </div>
          <div class="description">
            <a class="ui fluid yellow button" href="{{route('medicine.edit',$medicina->id)}}">Editar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
