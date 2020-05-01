@extends('layouts.app')

@section('content')
    <div class="ui middle aligned center aligned grid  ">
        <div class="column">
            <h2 class="ui blue header">
                <div class="content">
                    {{ __('Inicio de Sesion') }}
                </div>
            </h2>
            <form class="ui large form @if($errors->any()) error @endif " method="POST" action="{{ route('login') }}">
                @csrf
                <div class="ui stacked segment">
                    <div class="field @error('email') error @enderror">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="email" name="email" required value="{{ old('email') }}" placeholder="Correo Electronico">
                        </div>
                    </div>
                    <div class="field @error('password') error @enderror">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" value="{{ old('password') }}" name="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <button class="ui fluid large submit primary button" type="submit">Inicio de Sesion</button>
                </div>
                <div class="ui error message">
                    <ul class="list">
                        @error('email')
                            <li>{{ $message }}</li>
                        @enderror
                        @error('password')
                            <li>{{ $message }}</li>
                        @enderror
                    </ul>
                </div>
            </form>
        </div>

    </div>
@endsection
