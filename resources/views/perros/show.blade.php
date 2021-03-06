@extends('layouts.app')

@section('content')

    <div>
        <p>{{$perros['image']}}</p>
        <p>Nombre: <strong>{{$perros['name']}}</strong></p>
        <p>Raza: <strong>{{$perros['race']}}</strong></p>
        <p>Peso: <strong>{{ number_format($perros['weight'], 2) }}</strong></p>
        <p>Fecha de nacimiento: <strong>{{date('d-m-Y',$perros['born_date'])}}</strong></p>
        <p>Tipo de corte: <strong>{{$perros['cut']}}</strong></p>
        <p>Color: <strong>{{$perros['color']}}</strong></p>
        <p>Notas: <strong>{{$perros['notes']}}</strong></p>
    </div>
@endsection
