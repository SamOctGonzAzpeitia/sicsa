@extends('../Plantillas/layout')
@section('titulo')
    Usuarios
@endsection
@section('seccion')


    <div class="container">
        <h3>Editar Usuario</h3>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                    <br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endforeach
            </div>
        @endif
        <form action="{{route('users.update', $prevAnswers['id']) }}" method="POST">
            @csrf
            @include('Users.forms')
        </form>
    </div>

@endsection