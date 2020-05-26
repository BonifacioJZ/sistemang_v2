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
            <form method="POST" action="{{ route('note.destroy',$note->id) }}">
                @csrf
                @method('delete')
                <button type="submit" class="ui red fluid button">Eliminar</button>
            </form>
          </div>
      </div>
    </div>
</div>
@endsection
