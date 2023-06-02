@extends('../Plantillas/layout')
@section('titulo')
    Usuarios
@endsection
@section('seccion')


    <div class="container">
        <h3>Editar Usuario</h3>
        <hr>
        <form action="{{route('users.update', $prevAnswers['id']) }}" method="POST">
            @csrf
            @include('Users.forms')
        </form>
    </div>

@endsection