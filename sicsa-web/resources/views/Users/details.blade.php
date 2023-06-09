@extends('../Plantillas/layout')
@section('titulo')
    Usuarios
@endsection
@section('seccion')

    <h3>Detalle de Usuario</h3>
    <hr>
    @can('editarUsuario')
    <div class="container">
        <a href="{{ route('users.edit',  $prevAnswers['id']) }}" class="btn btn-outline-primary" >Editar</a>
        <a href="" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    </div>
    @endcan
    @include('Users.forms')
    @include('Users.modal')

        
    
@endsection