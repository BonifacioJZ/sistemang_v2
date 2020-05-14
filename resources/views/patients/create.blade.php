@extends('layouts.app')

@section('content')

<div class="ui middle aligned center aligned grid ">
    <div class="column">
        <h2 class="ui blue header">
            <div class="content">
                {{ __('Paciente') }}
            </div>
        </h2>
        <form class="ui large form @if($errors->any()) error @endif " method="POST" action="{{ route('patient.store') }}">
            @csrf
            <div class="ui stacked segment">

                <div class="field @error('name') error @enderror">
                    <label>{{ __('Nombre') }}</label>
                    <div class="ui">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre">
                    </div>
                </div>
                <div class="field @error('last_name') error @enderror">
                    <label>{{ __('Apellidos') }}</label>
                    <div class="ui">
                        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Apellidos">
                    </div>
                </div>
                <div class="field @error('telefono') error @enderror">
                    <label>{{ __('Telefono') }}</label>
                    <div class="ui">
                        <input type="tel" name="telefono" value="{{ old('telefono') }}" placeholder="00-00-00-00-00">
                    </div>
                </div>
                <div class="field @error('colonia') error @enderror">
                    <label>{{ __('Colonia') }}</label>
                    <div class="ui">
                        <input type="text" name="colonia" value="{{ old('colonia') }}"  placeholder="San Pedro Tacaro" />
                    </div>
                </div>
                <div class="field @error('ciudad') error @enderror">
                    <label>{{ __('Ciudad') }}</label>
                    <div class="ui">
                        <input type="text" name="ciudad" value="{{ old('ciudad') }}" placeholder="Coeneo">
                    </div>
                </div>
                <div class="field @error('curp') error @enderror">
                    <label>{{ __('Curp') }}</label>
                    <div class="ui">
                        <input type="text" name="curp" value="{{ old('curp') }}"  placeholder="Curp" />
                    </div>
                </div>
                <div class="field @error('fecha_de_nacimiento') error @enderror">
                    <label>{{ __('Fecha De Nacimiento') }}</label>
                    <div class="ui">
                        <input type="date" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento') }}"  placeholder="Fecha de Nacimiento" />
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
