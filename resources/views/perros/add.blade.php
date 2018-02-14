@extends('layouts.app')

@section('content')
    <form action="/perros/add" method="post">
        {{ csrf_field() }}
        <div class="form-group @if( $errors->has('content'))has-error @endif">
            {{--<input type="text" class="form-control" id="content" name="content" placeholder="Registra un nuevo perro">--}}
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
                        <input type="text" placeholder="Nombre" id="nameInput" name="name" class="form-control">
                        @if($errors->has('name'))
                            @foreach($errors->get('name') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group col-md-4">
                        <label for="raceInput">Raza</label>
                        <input type="text" placeholder="Raza" id="raceInput" name="race" class="form-control">
                        @if($errors->has('race'))
                            @foreach($errors->get('race') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group col-md-4">
                        <label for="weightInput">Peso (kg)</label>
                        <input type="text" placeholder="Peso" id="weightInput" name="weight" class="form-control">
                        @if($errors->has('weight'))
                            @foreach($errors->get('weight') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ImageInput">Imagen</label>
                    <input type="text" placeholder="Imagen" id="ImageInput" name="image" class="form-control">
                    @if($errors->has('image'))
                        @foreach($errors->get('image') as $message)
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="ColorInput">Color</label>
                    <input type="text" placeholder="Color" id="ColorInput" name="color" class="form-control">
                    @if($errors->has('color'))
                        @foreach($errors->get('color') as $message)
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-4">
                    <label for="bornDate">Seleccione fecha de nacimiento</label>
                    <input type="date" class="form-control" id="bornDate" name="bornDate">
                    @if($errors->has('born_date'))
                        @foreach($errors->get('born_date') as $message)
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="col-md-4">
                    <label for="sex">Seleccione sexo</label>
                    <select name="sex" id="sex">
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                    @if($errors->has('sex'))
                        @foreach($errors->get('sex') as $message)
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="form-check-group col-md-4">
                    <label for="transport">Transporte</label>
                    <input type="radio" id="transport" name="transport"> Si
                    <input type="radio" id="transport" name="transport"> No
                    @if($errors->has('transport'))
                        @foreach($errors->get('transport') as $message)
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="form-group col-md-12">
                <label for="CutType">Tipo de corte</label>
                <input type="text" placeholder="Tipo de corte" id="CutType" name="cut" class="form-control">
                @if($errors->has('cut'))
                    @foreach($errors->get('cut') as $message)
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="form-group col-md-12">
                <textarea name="notes" id="notes" cols="41" rows="10"
                          placeholder="Datos adicionales como alergias, problemas físicos, etc..."></textarea>
                @if($errors->has('notes'))
                    @foreach($errors->get('notes') as $message)
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @endforeach
                @endif
            </div>

            <input type="submit" class="btn btn-primary">
        </div>


    </form>
@endsection