@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirmación</div>
                <div class="card-body">
                    <h4 class="card-title">Esta informacion se eliminara para siempre ¿Desea Continuar?</h4>
                    <div class="btn-group">
                        <a href="{{ route('medicine.index') }}" class="btn btn-success">No</a>
                        <form method="POST" action="{{ route('medicine.destroy',$id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Si</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
