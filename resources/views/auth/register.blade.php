@extends('layouts.app')

@section('content')
<div class="ui middle aligned center aligned grid container segment">
    <div class="column">
        <h2 class="ui blue header">
            <div class="content">
                {{ __('Registro') }}
            </div>
        </h2>
        <form class="ui large form @if($errors->any()) error @endif " method="POST" action="{{ route('register') }}">
            @csrf
            <div class="ui stacked segment">

                <div class="field @error('name') error @enderror">
                    <label>{{ __('Nombre') }}</label>
                    <div class="ui left icon input">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre">
                    </div>
                </div>
                <div class="field @error('username') error @enderror">
                    <label>{{ __('Nombre de Usuario') }}</label>
                    <div class="ui left icon input">
                        <input type="text" name="username" value="{{ old('username') }}" placeholder="Nombre de Ususario">
                    </div>
                </div>
                <div class="field @error('last_name') error @enderror">
                    <label>{{ __('Aapellido') }}</label>
                    <div class="ui left icon input">
                        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Apellidos">
                    </div>
                </div>

                <div class="field @error('email') error @enderror">
                    <label>{{ __('Correo Electronico') }}o</label>
                    <div class="ui left icon input">

                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electronico">
                    </div>
                </div>
                <div class="field @error('password') @enderror">
                    <label>{{ __('Contraseña') }}</label>
                    <div class="ui left icon input">
                        <input type="password" name="password" placeholder="Contraseña">
                    </div>

                </div>
                <div class="field @error('password-confirm') @enderror">
                    <label>{{ __('Confirmar Contraseña') }}</label>
                    <div class="ui left icon input">
                        <input type="password" name="password-confirm" placeholder="Contraseña">
                    </div>

                </div>
                <button class="ui fluid large submit primary button" type="submit">Inicio de Sesion</button>
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
