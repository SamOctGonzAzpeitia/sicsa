@extends('../Plantillas/layout')

@section('titulo', 'Detalles Servicios')

@section('seccion')

    <h3>Detalle Servicio</h3>
    <hr>
    <div class="container">
        <a href="{{ route('services.edit',  $prevAnswers['id']) }}" class="btn btn-outline-primary" >Editar</a>
        @can('eliminarServicio')
        <a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
        @endcan
    </div>

    @include('Services.modal')
    
    @include('Services.form')

@endSection

