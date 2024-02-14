<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/76fa277871.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-md navbar-light bg-light mb-5">
    <div class="container-fluid">
        <img  src="{{URL::asset('img/logo.png')}}" width="150" height="90">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            
            <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Inicio</a>
            </li>
            @can('verUsuarios')
            <li class="nav-item">
            <a class="nav-link" href="{{route('users')}}">Usuarios</a>
            </li>
            @endcan
            @can('verLlamadas')
            <li class="nav-item">
            <a class="nav-link" href="{{route('calls')}}">Llamadas</a>
            </li>
            @endcan
            @can('verServicios')
            <li class="nav-item">
            <a class="nav-link" href="{{route('services')}}">Ordenes de Servicio</a>
            </li>
            @endcan
            @can('verClientes')
            <li class="nav-item">
            <a class="nav-link" href="{{ route('clients') }}">Clientes</a>
            </li>
            @endcan
        </ul>
        </div>
    </div>
    </nav>
    <div id="mainContainer">
        @if (session('error'))
            <div class="alert alert-primary" role="alert" :message="session('error')">
        @endif
        @if (session('success'))
            <div class="alert alert-primary" role="alert" :message="session('success')">
        @endif

        <h1 class="uk-heading-divider">@yield('title')</h1>
        @yield('main')
    </div>

    <div class="container">
        @yield('seccion')
    </div>


    <footer class="container mt-5">
        Derechos reservados Sicsa 2021

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>