@extends('layouts.app')

@section('content')

<div class="ui middle aligned center aligned grid ">
    <div class="column">
        <h2 class="ui blue header">
            <div class="content">
                {{ __('Expediente') }}
            </div>
        </h2>
        <form class="ui large form @if($errors->any()) error @endif " method="POST" action="{{ route('expedient.store') }}">
            @csrf
            <div class="ui stacked segment">

                <div class="field @error('pulso') error @enderror">
                    <label>{{ __('Pulso') }}</label>
                    <div class="ui">
                        <input type="text" name="pulso" value="{{ old('pulso') }}" placeholder="Pulso">
                    </div>
                </div>
                <div class="field @error('respiracion') error @enderror">
                    <label>{{ __('Respiracion') }}</label>
                    <div class="ui">
                        <input type="text" name="respiracion" value="{{ old('respiracion') }}" placeholder="Respiracion">
                    </div>
                </div>
                <div class="field @error('temperatura') error @enderror">
                    <label>{{ __('Temperatura') }}</label>
                    <div class="ui">
                        <input type="text" name="temperatura" value="{{ old('temperatura') }}" placeholder="Temperatura">
                    </div>
                </div>
                <div class="field @error('presion_d') error @enderror">
                    <label>{{ __('Presion Diastolica') }}</label>
                    <div class="ui">
                        <input type="text" name="presion_d" value="{{ old('presion_d') }}" placeholder="Presion Diastolica" />
                    </div>
                </div>
                <div class="field @error('presion_s') error @enderror">
                    <label>{{ __('Presion Sistolica') }}</label>
                    <div class="ui">
                        <input type="text" name="presion_s" value="{{ old('presion_s') }}" placeholder="Presion Sistolica">
                    </div>
                </div>
                <div class="field">
                    <label>Medicinas</label>
                    <select multiple="" name="medicinas[]" class="ui dropdown">
                      <option value="">Seleccione los medicamentos</option>
                      @foreach($medicinas as $medicina)
                        <option value="{{ $medicina->id }}">{{ $medicina->nombre }}</option>

                      @endforeach
                    </select>
                  </div>
                <input type="hidden" name="patient_id" value="{{$id}}" />
                <input type="hidden" name="id" value="{{ auth()->user()->id }}" />
                <button class="ui fluid large submit primary button" type="submit">Registrar</button>
            </div>
            <div class="ui error message">
                <ul class="list">
                   @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
                </ul>
            </div>
        </form>
    </div>

</div>

@endsection
