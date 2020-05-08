@extends('layouts.app')

@section('content')

<div class="ui segment" >
    <div class="row-cols-md-6">
        <div>
            <div class="btn-group" >
                <a href="{{ route('cita.create') }}" class="ui button green ">Registrar Cita</a>
            </div>
        </div>
    </div>
    <br>

    <div class="justify-content-center">
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($citas as $cita)
                    @if($cita->status)
                        <tr>
                            <th>{{ $cita->title }}</th>
                            <th>{{ $cita->descripcion }}</th>
                            <th>{{ $cita->fecha }}</th>
                            <th>{{ $cita->hora_de_inicio }}</th>
                            <th>
                                <div class="ui buttons">
                                    <a href="{{ route('cita.show',$cita->id) }}" class="ui positive button">Ver Cita</a>
                                    <div class="or" data-text="o"></div>
                                    <a href="{{ route('cita.confirm',$cita->id) }}" class="ui red button">Eliminar</a>
                                  </div>
                            </th>

                        </tr>
                    @endif

                @endforeach
            </tbody>
          </table>

    </div>
    </div>
    </div>
@endsection

