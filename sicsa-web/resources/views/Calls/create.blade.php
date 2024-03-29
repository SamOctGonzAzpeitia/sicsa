@extends('../Plantillas/layout')

@section('titulo', 'Crear Llamada')
    
@section('seccion')
    
    <h3>Crear Llamada</h3>
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
    <form action="{{route('calls.store')}}" method="post">
    @csrf
        @include('Calls.form')
    </form>
    

    

@endSection
    