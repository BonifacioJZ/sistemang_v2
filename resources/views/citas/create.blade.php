@extends('layouts.app')

@section('content')

<div class="ui middle aligned center aligned grid ">
    <div class="column">
        <h2 class="ui blue header">
            <div class="content">
                {{ __('Registro de Citas') }}
            </div>
        </h2>
        <form class="ui large form @if($errors->any()) error @endif " method="POST" action="{{ route('cita.store') }}">
            @csrf
            <div class="ui stacked segment">

                <div class="field @error('tittle') error @enderror">
                    <label>{{ __('Titulo') }}</label>
                    <div class="ui">
                        <input type="text" name="tittle" value="{{ old('tittle') }}" placeholder="Titulo">
                    </div>
                </div>
                <div class="field @error('descripcion') error @enderror">
                    <label>{{ __('Descripcion') }}</label>
                    <div class="ui">
                        <textarea rows="2" name="descripcion">{{ old('descripcion') }}</textarea>
                    </div>
                </div>

                <div class="field @error('fecha') error @enderror">
                    <label>{{ __('Fecha') }}</label>
                    <div class="ui">
                        <input type="date"  name="fecha" placeholder="Fecha">
                    </div>

                </div>
                <input type="hidden" name="id" value="{{ auth()->user()->id }}" />
                <div class="field @error('hora') error @enderror">
                    <label>{{ __('Hora') }}</label>
                    <div class="ui">
                        <input type="time" name="hora" placeholder="Hora">
                    </div>

                </div>
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
