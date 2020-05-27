@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirmación</div>
                <div class="card-body">
                    <h4 class="card-title">Esta informacion se eliminara para siempre ¿Desea Continuar?</h4>
                    <div class="ui buttons">
                        <a href="{{ route('medicine.index') }}" class="ui positive button">No</a>
                        <div class="or" data-text="o"></div>
                        <form method="POST" action="{{ route('medicine.destroy',$id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="ui red button">Si</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
