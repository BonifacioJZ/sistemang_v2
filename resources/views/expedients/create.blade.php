@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Expedientes') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('expedient.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pulso') }}</label>

                            <div class="col-md-6">
                                <input id="pulso" type="text" class="form-control @error('pulso') is-invalid @enderror" name="pulso" value="{{ old('pulso') }}" required autocomplete="pulso" autofocus>

                                @error('pulso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="respiracio" class="col-md-4 col-form-label text-md-right">{{ __('Respiracion') }}</label>

                            <div class="col-md-6">
                                <input id="respiracion" type="text" class="form-control @error('respiracion') is-invalid @enderror" name="respiracion" value="{{ old('respiracion') }}" required autocomplete="respiracion" placeholder="Respiracion">

                                @error('respiracion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="temperatura" class="col-md-4 col-form-label text-md-right">{{ __('Temperatura') }}</label>

                            <div class="col-md-6">
                                <input id="temperatura" type="text" class="form-control @error('temperatura') is-invalid @enderror" name="temperatura" value="{{ old('temperatura') }}"  placeholder="Temperatura" required autocomplete="temperatura">

                                @error('temperatura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="presion_d" class="col-md-4 col-form-label text-md-right">{{ __('Presion Diastolica') }}</label>

                            <div class="col-md-6">
                                <input id="presion_d" type="text" class="form-control @error('precion_d') is-invalid @enderror" name="presion_d" value="{{ old('presion_d') }}" required placeholder="Presion Diastolica" autocomplete="presion_d">

                                @error('presion_d')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="presion_s" class="col-md-4 col-form-label text-md-right">{{ __('Presion Sistolica') }}</label>

                            <div class="col-md-6">
                                <input id="presion_s" type="text" class="form-control @error('presion_s') is-invalid @enderror" name="presion_s" value="{{ old('presion_s') }}" required  placeholder="Presion Sistolica" autocomplete="presion_s">

                                @error('presion_s')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="patient_id" value="{{$id}}" />
                        <input type="hidden" name="id" value="{{ auth()->user()->id }}" />
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
