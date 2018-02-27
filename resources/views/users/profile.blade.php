@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 pt-5">
                <img src="/images/{{ $user->avatar }}" alt="imagen de perfil"
                     style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                <h2>Perfil de {{ $user->username }}</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label for="updateAvatar"><b>Actualizar imagen de perfil</b></label>
                    <div class="row">
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <input type="submit" class="pull-right  btn btn-sm btn-primary mt-3">
                </form>
                <hr>
                <form action="/profile" method="post">
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="{{$user->name}}">
                        </div>
                        <div class="col-md-4">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="{{$user->surname}}">
                        </div>
                        <div class="col-md-4">
                            <label for="dni">DNI</label>
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="{{$user->dni}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="adress">Dirección</label>
                            <input type="text" class="form-control" id="adress" name="adress" placeholder="{{$user->adress}}">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="{{$user->email}}">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection