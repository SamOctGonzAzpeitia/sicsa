@extends('../Plantillas/layout')

@section('titulo', 'Detalles Servicios')

@section('seccion')

<h3>Editar Servicio</h3>
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
    <form action="{{route('services.update', $prevAnswers['id']) }}" method="post">
    @csrf
        @include('Services.form')
    </form>
    
@endsection