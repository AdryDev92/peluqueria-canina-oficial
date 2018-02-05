@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="/perros/add" method="post">
            {{ csrf_field() }}
            <div class="form-group @if( $errors->has('content'))has-error @endif">
                <input type="text" class="form-control" id="content" name="content">
            </div>
            @if($errors->has('content'))
                @foreach($errors->get('content') as $message)
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endforeach
            @endif
        </form>
    </div>
    <div class="text-center">
        {{ $perros->links() }}
    </div>


        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Peso</th>
                    <th>Tipo de corte</th>
                    <th>Color</th>
                    <th>Notas</th>
                </tr>
            </thead>
            <tbody>
            @forelse($perros as $perro)

                <tr>
                    <td>{{$perro['id']}}</td>
                    <td>
                        <a href="/perro/{{$perro['name']}}"><img src="{{$perro['image']}}" alt="imagen de {{$perro['name']}}"></a></td>
                    <td>{{$perro['name'] }}</td>
                    <td>{{$perro['race'] }}</td>
                    <td>{{$perro['weight'] }} kg</td>
                    <td>{{$perro['cut'] }}</td>
                    <td>{{$perro['color'] }}</td>
                    <td>{{$perro['notes'] }}</td>
                </tr>


    @empty
        <p class="text-center">No hay perros registrados</p>
    @endforelse
            </tbody>
        </table>

    <div class="text-center">
        {{ $perros->links('pagination::bootstrap-4') }}
    </div>
@endsection
