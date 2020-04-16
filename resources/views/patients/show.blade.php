@extends('layouts.app')
@section('content')
    <div class="container-fluid ">
        <div class="justify-content-center">
            <div class="card text-center">
              <div class="card-header">
                  Paciente {{__($paciente->name)}} {{ __($paciente->last_name) }}
              </div>
            <div class="card-body">
                <dl class="row" >
                    <dt class="col-sm-3" >Fecha de Nacimiento</dt>
                    <dd class="col-sm-9" >{{__($paciente->fecha_de_nacimiento)}}</dd>
                    <dt class="col-sm-3" >Edad</dt>
                    <dd class="col-sm-9">{{ __($edad) }}</dd>
                    <dt class="col-sm-3">Telefono</dt>
                    <dd class="col-sm-9" >{{__($paciente->telefono)}}</dd>
                    <dt class="col-sm-3" >Curp</dt>
                    <dd class="col-sm-9" >{{ __($paciente->curp) }}</dd>
                    <dt class="col-sm-3"> Comunidad </dt>
                    <dd class="col-sm-9">{{ $paciente->colonia }} {{ $paciente->ciudad }}</dd>
                </dl>
                <a href="{{ route('expedient.index',$paciente->id) }}" class="btn btn-primary">Expedientes</a>
            </div>
        </div>
        </div>
    </div>
@endsection
