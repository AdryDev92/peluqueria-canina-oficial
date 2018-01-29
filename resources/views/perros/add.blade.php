@extends('layouts.app')

@section('content')
    <form action="{{ url('/') }}/perros/add" method="post">
        {{ csrf_field() }}
        <div class="form-group @if( $errors->has('content'))has-error @endif">
            <input type="text" class="form-control" id="content" name="content" placeholder="Registra un nuevo perro">
        </div>
        @if($errors->has('content'))
            @foreach($errors->get('content') as $message)
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endforeach
        @endif

        <div class="row form-inline">
            <div class="form-group">
                <label for="nameInput">Nombre</label>
                <input type="text" placeholder="Nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="raceInput">Raza</label>
                <input type="text" placeholder="Raza" class="form-control">
            </div>
        </div>

    </form>
@endsection