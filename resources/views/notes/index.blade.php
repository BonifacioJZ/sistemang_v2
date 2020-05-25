@extends('layouts.app')
@section('content')
<div class="ui segment" >
    <div class="row-cols-md-6">
        <div>
            <div>
                <a href="{{ route('note.create',$id) }}" class="ui button green ">Crear Nota</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
      <table class="ui celled table">
        <thead>
            <tr>
              <th scope="col" >ID</th>
              <th scope="col" >Titulo</th>
              <th scope="col" >Fecha</th>
              <th scope="col" >Hora</th>
              <th scope="col"> Acciones </th>
            </tr>
        </thead>
        @foreach($notes as $note)
            <tbody>
                <td>{{ $note->id }}</td>
                <td>{{ $note->titulo }}</td>
                <td>{{ $note->date }}</td>
                <td>{{ $note->hora }}</td>
                <td> <div class="ui buttons vertical " >
                    <a href="{{ route('note.show',$note->id) }}" class=" mini ui button blue ">Ver Expediente</a>
                    <a href="#" class="mini ui button yellow ">Actualizar</a>
                </div></td>
            </tbody>
        @endforeach

      </table>
      {{ $notes->links() }}
    </div>
    </div>
    </div>

@endsection

