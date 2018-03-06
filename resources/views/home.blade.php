@extends('layouts.app')


@section('content')
    @auth
        <div class="container row">
            <div class="col-md-6">
                <div class="ml-2 mt-2">

                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="https://comps.canstockphoto.es/logo-perro-dibujo_csp41564190.jpg"
                             alt="img">
                        <div class="card-block">
                            <div class="card-header">
                                <h3 class>Menú</h3>
                                <p>Utilice éste menú para moverse entre las distintas opciones disponibles</p>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="/perros/add">Pedir cita</a></li>
                            <li class="list-group-item"><a href="">Servicios</a></li>
                            <li class="list-group-item"><a href="">Configuración</a></li>
                            <li class="list-group-item"><a href="">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    @endauth
@endsection
