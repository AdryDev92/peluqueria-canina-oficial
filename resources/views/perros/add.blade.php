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

        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nameInput">Nombre</label>
                    <input type="text" placeholder="Nombre" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="raceInput">Raza</label>
                    <input type="text" placeholder="Raza" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="weightInput">Peso</label>
                    <input type="text" placeholder="Peso" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ImageInput">Imagen</label>
                    <input type="text" placeholder="Imagen" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="ColorInput">Color</label>
                    <input type="text" placeholder="Color" class="form-control">
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="CutType">Tipo de corte</label>
                <input type="text" placeholder="Tipo de corte" class="form-control">
            </div>

            <div class="form-group col-md-12">
                <textarea name="notes" id="notes" cols="40" rows="10"
                          placeholder="Datos adicionales como alergias, problemas físicos, etc..."></textarea>
            </div>

            <input type="submit" class="btn btn-primary">
        </div>


    </form>
@endsection