@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row-cols-md-6">
        <div>
            <div class="btn-group" >
                <a href="{{ route('medicine.create') }}" class="ui button green ">Registrar Medicina</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
        <table class="ui celled table">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Disponible</th>
                <th>Acciones</th>
              </tr>
            </thead>
            @foreach($medicinas as $medicina)
                <tr>
                    <td>{{ $medicina->codigo }}</td>

                    <td>{{ $medicina->nombre }}</td>

                @if($medicina->disponible)
                    <td class="positive"> Disponible</td>

                @else

                    <td class="negative">No  Disponible</td>

                @endif
                <th>
                    <div class="ui buttons">
                        <a href="{{ route('medicine.show',$medicina->id) }}" class="ui positive button">Ver Cita</a>
                        <div class="or" data-text="o"></div>
                        <a href="{{ route('medicine.confirm',$medicina->id) }}" class="ui red button">Eliminar</a>
                      </div>
                </th>
            </tr>
            @endforeach
          </table>

    </div>
    </div>
    </div>

@endsection
