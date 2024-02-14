@extends('../Plantillas/layout')

@section('titulo', 'Detalles L')

@section('seccion')

    <h3>Detalle de Lamada</h3>
    <hr>
    <div class="container">
        <a href="{{ route('calls.edit',  $prevAnswers['id']) }}" class="btn btn-outline-primary" >Editar</a>
        <a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
        
    </div>

    @include('Calls.modal')
    
    @include('Calls.form')

@endSection

