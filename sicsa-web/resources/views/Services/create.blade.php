@extends('../Plantillas/layout')

@section('titulo', 'Crear Servicios')
    
@section('seccion')
    
    <h3>Crear Servicio</h3>
    <hr>
    <form action="{{route('services.store')}}" method="post">
    @csrf
        @include('Services.form')
    </form>
    

    

@endSection
    