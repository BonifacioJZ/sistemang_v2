@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Medicina') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('medicine.update',$medicine->id) }}">
                        {!! method_field('PUT') !!}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $medicine->nombre }}" required autocomplete="nombre" >

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="formula" class="col-md-4 col-form-label text-md-right">{{ __('Formula') }}</label>

                            <div class="col-md-6">
                                <input id="formula" type="text" class="form-control @error('formula') is-invalid @enderror" name="formula" value="{{ $medicine->formula }}" required autocomplete="formula" placeholder="Formula">

                                @error('formula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="codigo" class="col-md-4 col-form-label text-md-right">{{ __('Codigo') }}</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control @error('codigo') is-invalid @enderror" name="codigo" value="{{ $medicine->codigo }}" required autocomplete="codigo" placeholder="codigo">

                                @error('codigo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Dosis" class="col-md-4 col-form-label text-md-right">{{ __('Dosis') }}</label>

                            <div class="col-md-6">
                               <input id="dosis" type="text" class="form-control @error('dosis') is-invalid @enderror" name="dosis" value="{{$medicine->dosis}}" required autocomplete="dosis" />

                                @error('dosis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="laboratorio" class="col-md-4 col-form-label text-md-right">{{ __('Laboratorio') }}</label>

                            <div class="col-md-6">
                                <input id="laboratorio" type="text" class="form-control @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{ $medicine->laboratorio }}"  placeholder="Laboratorio" autocomplete="laboratorio">

                                @error('laboratorio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$medicine->description}}" required autocomplete="dosis" />

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
