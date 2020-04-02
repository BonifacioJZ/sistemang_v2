@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form class="form-inline" method="POST" action="{{ route('list.store') }}">
             @csrf
            <div class="form-group mx-sm-3 mb-2">
              <label for="inputPassword2" class="sr-only">Nombre</label>
              <input type="text"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-2">Registrar</button>
          </form>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista De espera</div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($listas  as$list )
                          <tr>
                              <th>{{ $list->name }}</th>
                              <th>
                                <div class="btn-group" >
                                    <form method="POST" action="{{ route('list.destrpyer',$list->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </div>
                              </th>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
