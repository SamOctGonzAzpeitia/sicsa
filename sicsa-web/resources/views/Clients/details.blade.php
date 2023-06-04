@extends('../Plantillas/layout')
@section('titulo')
    Clientes
@endsection
@section('seccion')

    
    <h3>Detalle de Clientes</h3>
        <hr>
        <div class="container">
            <a href="{{route('clients.edit', $prevAnswers['id'])}}" class="btn btn-outline-primary" >Editar</a>
            <a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
        </div>
        @include('Clients.form')
        @include('Clients.modal')
@endsection
