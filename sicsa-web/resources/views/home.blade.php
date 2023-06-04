@extends('../Plantillas/layout')
@section('titulo')
    Home
@endsection
@section('seccion')
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenido al Portal de Sicsa {{auth()->user()->name}}</h1>
        <p class="col-md-8 fs-4">Nuestro portal de clientes es una plataforma diseñada especialmente para brindarles a nuestros clientes una experiencia óptima y personalizada. Aquí, podrán acceder a una variedad de funciones y servicios que les permitirán interactuar con nuestra empresa de manera eficiente y conveniente.</p>
        <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
      </div>
    </div>

 
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <input type="submit" class="btn btn-danger" value="Logout">
    </form>          
@endsection