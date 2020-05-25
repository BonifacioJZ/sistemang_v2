@extends('layouts.app')
@section('content')
<div class="ui middle aligned center aligned grid ">
    <div class="column">
        <h2 class="ui blue header">
            <div class="content">
                {{ __('Nota') }}
            </div>
        </h2>
        <form class="ui large form @if($errors->any()) error @endif " method="POST" action="{{ route('note.store') }}">
            @csrf
            <div class="ui stacked segment">

                <div class="field @error('titulo') error @enderror">
                    <label>{{ __('Titulo') }}</label>
                    <div class="ui">
                        <input type="text" name="titulo" value="{{ old('titulo') }}" placeholder="Titulo">
                    </div>
                </div>
                <div class="field @error('nota') error @enderror">
                    <label>{{ __('Nota') }}</label>
                    <div class="ui">
                        <textarea rows="4" name="nota">{{ old('nota') }}</textarea>
                    </div>
                </div>
                <input type="hidden" value="{{ $id }}" name="expedient" />
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
