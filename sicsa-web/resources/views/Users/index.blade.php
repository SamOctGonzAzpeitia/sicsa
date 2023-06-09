@extends('../Plantillas/layout')

@section('titulo')
    Usuarios
@endsection

@section('seccion')

    <div class="container">
        <h3>Usuarios</h3>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show">
            
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col">
            <form action="{{route('users')}}" class="" method="GET">
                <label for="filtro">Buscar</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre, correo" name="filtro">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                </div> 
            </form>
            </div>
            @can('registrarUsuario')
            <div class="col">
                <a href="{{route('users.create')}}" class="btn btn-outline-primary mt-4">Agregar Usuario</a>
            </div>
            @endcan
        </div>
        
    </div>

    <div class="container">
        <hr>    
        <table class="table caption-top table-striped">
            <caption>Usuarios</caption>
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user['id']}}</th>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline link-underline-opacity-0" href="{{ url('/users/show/'.$user['id']) }}">
                            {{$user['name']}}
                            </a>
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2" href="{{ url('/users/show/'.$user['id']) }}">
                            {{$user['email']}}          
                            </a>
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline-opacity-0 " href="{{ url('/users/show/'.$user['id']) }}">
                            @if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 4)
                                Administrador   
                            @elseif($user['role_id'] == 3)
                                Cliente
                            @endif
                            
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline-opacity-0 " href="{{ url('/users/show/'.$user['id']) }}">
                            {{$user['phone']}}
                        </td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$users->links()}}
        </div>
    </div>
@endsection