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
@endsection
