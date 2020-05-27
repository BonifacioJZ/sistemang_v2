@extends('layouts.app')

@section('content')
<div class="ui middle aligned center aligned grid ">
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
                <div class="field @error('role') error @enderror">
                    <label>{{ __('Selecione un Rol') }}</label>
                    @if(auth()->user()->hasRole(['super']))
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                          Super Ususario
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                          Administrador
                        </label>
                      </div>
                    @endif
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="exampleRadios3" value="3">
                        <label class="form-check-label" for="exampleRadios2">
                          Doctor
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="exampleRadios3" value="4">
                        <label class="form-check-label" for="exampleRadios2">
                          Enfermera
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="exampleRadios3" value="5">
                        <label class="form-check-label" for="exampleRadios2">
                          Secretaria
                        </label>
                      </div>
                </div>
                <div class="field @error('password') error @enderror">
                    <label>{{ __('Contraseña') }}</label>
                    <div class="ui left icon input">
                        <input type="password" name="password" placeholder="Contraseña">
                    </div>

                </div>
                <div class="field @error('password-confirm') error @enderror">
                    <label>{{ __('Confirmar Contraseña') }}</label>
                    <div class="ui left icon input">
                        <input type="password" name="password_confirmation" placeholder="Contraseña">
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
