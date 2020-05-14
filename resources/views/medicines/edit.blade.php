@extends('layouts.app')

@section('content')

<div class="ui middle aligned center aligned grid ">
    <div class="column">
        <h2 class="ui blue header">
            <div class="content">
                {{ __('Medicina') }}
            </div>
        </h2>
        <form class="ui large form @if($errors->any()) error @endif " method="POST" action="{{ route('medicine.update',$medicine->id) }}">
            @method('put')
            @csrf
            <div class="ui stacked segment">

                <div class="field @error('nombre') error @enderror">
                    <label>{{ __('Nombre') }}</label>
                    <div class="ui">
                        <input type="text" name="nombre" value="{{ __($medicine->nombre) }}" placeholder="Nombre">
                    </div>
                </div>
                <div class="field @error('formula') error @enderror">
                    <label>{{ __('Formula') }}</label>
                    <div class="ui">
                        <input type="text" name="formula" value="{{ __($medicine->formula) }}" placeholder="Formula">
                    </div>
                </div>
                <div class="field @error('codigo') error @enderror">
                    <label>{{ __('Codigo') }}</label>
                    <div class="ui">
                        <input type="text" name="codigo" value="{{ __($medicine->codigo) }}" placeholder="Codigo">
                    </div>
                </div>
                <div class="field @error('dosis') error @enderror">
                    <label>{{ __('Dosis') }}</label>
                    <div class="ui">
                        <textarea rows="2" name="dosis">{{ __($medicine->dosis) }}</textarea>
                    </div>
                </div>
                <div class="field @error('laboratorio') error @enderror">
                    <label>{{ __('Laboratorio') }}</label>
                    <div class="ui">
                        <input type="text" name="laboratorio" value="{{ __($medicine->laboratorio) }}" placeholder="laboratorio">
                    </div>
                </div>
                <div class="field @error('description') error @enderror">
                    <label>{{ __('Descripcion') }}</label>
                    <div class="ui">
                        <textarea rows="2" name="description">{{ __($medicine->description) }}</textarea>
                    </div>
                </div>
                <button class="ui fluid large submit primary button" type="submit">Actualizar</button>
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
