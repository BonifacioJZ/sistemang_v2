@extends('layouts.app')
@section('content')
<div class="ui segment">
    <div class="ui unstackable items">
      <div class="item">
        <div class="content">
          <a class="header">Expediente de la fecha {{$expedient->date}}  y hora  {{ $expedient->time }} </a>
          <div class="meta">
            <span>Pulso</span>
          </div>
          <div class="description">
            <p> {{  __($expedient->pulso)  }}</p>
          </div>
          <div class="meta">
            <span>Temperatura</span>
          </div>
          <div class="description">
            <p> {{  __($expedient->temperatura)  }}</p>
          </div>
          <div class="meta">
            <span>Pesion</span>
          </div>
          <div class="description">
            <p> {{  __($expedient->presion_d)  }}</p>
          </div>
          <div class="meta">
            <span>presion</span>
          </div>
          <div class="description">
            <p> {{  __($expedient->presion_s)  }}</p>
          </div>
          <div class="description">
            <a class="ui fluid yellow button" href="#">Notas</a>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
