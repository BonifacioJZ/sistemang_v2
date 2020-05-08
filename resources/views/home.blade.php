@extends('layouts.app')

@section('content')
<div class="ui segment">
    <div class="row justify-content-center">
        <form class="ui form @if($errors->any()) error @endif" method="POST" action="{{ route('list.store') }}">
             @csrf
            <div class="form-group mx-sm-3 mb-2">
                <div class="field @error('name') error @enderror">
                    <input type="text"  name="name" placeholder="Nombre">
                  </div>
                  <div class="field">
                    <button class="ui fluid  submit primary button" type="submit">Inicio de Sesion</button>
                  </div>

            </div>
            <div class="ui error message">
                <ul class="list">
                    @error('name')
                        <li>{{ $message }}</li>
                    @enderror
                </ul>
            </div>

          </form>
        <div class="col-md-8">
            <h2 class="ui blue header">
                <div class="content">
                    {{ __('Lista de espera') }}
                </div>
            </h2>
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listas as $list)
                        <tr>
                            <th>{{ $list->name }}</th>
                            <th>
                                <form method="POST" action="{{ route('list.destrpyer',$list->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="tiny ui button red" >Eliminar</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
