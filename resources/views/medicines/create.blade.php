@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Medicina') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('medicine.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Dosis" class="col-md-4 col-form-label text-md-right">{{ __('Dosis') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('dosis') is-invalid @enderror" name="dosis" value="{{ old('dosis') }}" required id="exampleFormControlTextarea1" rows="3"></textarea>

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
                                <input id="laboratorio" type="text" class="form-control @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{ old('laboratorio') }}"  placeholder="Laboratorio" autocomplete="laboratorio">

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
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required id="exampleFormControlTextarea1" rows="3"></textarea>

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
                                    {{ __('Crear') }}
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
