@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row-cols-md-6">
        <div>
            <div class="btn-group" >
                <a href="{{ route('medicine.create') }}" class="btn btn-success">Crear Medicina</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
      <table class="table">
        <thead>
            <tr>
              <th scope="col" >Codigo</th>
              <th scope="col" >Nombre</th>
              <th scope="col"> Acciones </th>
            </tr>
        </thead>
        @foreach($medicinas as $medicina)
            <tbody>
                <td> {{ $medicina->codigo }}</td>
                <td>{{ $medicina->nombre }}</td>
               
                <td> <div class="btn-group" >
                    <a href="{{  route('medicine.show',$medicina->id) }}" class="btn btn-primary btn-sm">Ver Medicina</a>
                    <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                </div></td>
            </tbody>
        @endforeach

      </table>

    </div>
    </div>
    </div>

@endsection
