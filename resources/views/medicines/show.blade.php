@extends('layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="justify-content-center">
        <div class="card text-center">
          <div class="card-header">
              Medicina {{__($medicina->nombre)}}
          </div>
        <div class="card-body">
            <dl class="row" >
                <dt class="col-sm-3" >Codigo</dt>
                <dd class="col-sm-9" >{{__($medicina->codigo)}}</dd>
                <dt class="col-sm-3" >Formula</dt>
                <dd class="col-sm-9">{{ __($medicina->formula) }}</dd>
                <dt class="col-sm-3">Descripcion</dt>
                <dd class="col-sm-9" >{{__($medicina->description)}}</dd>
                <dt class="col-sm-3" >Formula</dt>
                <dd class="col-sm-9" >{{ __($medicina->formula) }}</dd>
            </dl>
        </div>
    </div>
    </div>
</div>
@endsection
