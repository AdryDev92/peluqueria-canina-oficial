@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="/perros/create" method="post">
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

    @forelse($perros as $perro)
        <div class="row perro">
            <div class="col-md-12">
                <p class="perro-name">{{ $perro['name'] }}</p>
                <p>{{ $perro['race'] }}</p>
                <p>{{$perro['weight'] }}</p>
                <p>{{$perro['cut'] }}</p>
                <p>{{$perro['notes'] }}</p>
                <p>{{$perro['color'] }}</p>
                <p>{{$perro['image'] }}</p>
            </div>
        </div>
    @empty
        <p>No hay perros registrados</p>
    @endforelse

    <div class="text-center">
        {{ $perros->links('pagination::bootstrap-4') }}
    </div>
@endsection
