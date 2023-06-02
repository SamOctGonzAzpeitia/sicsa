@extends('../Plantillas/layout')

@section('titulo', 'Detalles Servicios')

@section('seccion')

<h3>Editar Servicio</h3>
    <hr>
    <form action="{{route('services.update', $prevAnswers['id']) }}" method="post">
    @csrf
        @include('Services.form')
    </form>
    
@endsection