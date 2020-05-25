@extends('layouts.app')
@section('content')
<div class="ui segment">
    <div class="ui unstackable items">
      <div class="item">
        <div class="content">
          <a class="header">Titulo {{  $note->titulo}} </a>
          <div class="meta">
            <span>Nota</span>
          </div>
          <div class="description">
            <p> {{  $note->nota }}</p>
          </div>
          <div class="description">
            <a class="ui fluid red button" href="#">Eliminar</a>
          </div>
      </div>
    </div>
</div>
@endsection
