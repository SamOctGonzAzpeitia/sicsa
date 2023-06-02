@extends('../Plantillas/layout')
@section('titulo')
    Usuarios
@endsection
@section('seccion')

    <div class="container">
        <h3>Usuarios</h3>
        <hr>
        <form action="{{route('users.store')}}" method="POST">
            @csrf
            @include('Users.forms')
        </form>
    </div>

@endsection