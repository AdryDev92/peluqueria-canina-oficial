@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center"><strong>Página de inicio</strong></div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bienvenid@ al portal de tu peluquería canina
                </div>
            </div>
        </div>
    </div>
</div>
@auth
<div class="container">
    <div class="row">
        <div class="col-md-3 offset-md-3">

            <div class="card pb-4 pt-4">
                <div class="card-body text-center">Pedir cita</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card pb-4 pt-4">
                <div class="card-body text-center">
                    Recibos
                </div>
            </div>
        </div>
    </div>

</div>
    @endauth
@endsection
