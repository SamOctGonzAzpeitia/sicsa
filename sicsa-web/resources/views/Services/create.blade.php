@extends('../Plantillas/layout')

@section('titulo', 'Crear Servicios')
    
@section('seccion')
    
    <h3>Crear Servicio</h3>
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
    <form action="{{route('services.store')}}" method="post">
    @csrf
        @include('Services.form')
    </form>
    

    

@endSection
    