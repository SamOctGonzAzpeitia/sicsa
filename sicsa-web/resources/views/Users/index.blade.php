@extends('../Plantillas/layout')

@section('titulo')
    Usuarios
@endsection

@section('seccion')

    <div class="container">
        <h3>Usuarios</h3>
        <div class="row">
            <div class="col">
            <form action="" class="">
                <label for="">Buscar</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre, descripción, cliente" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                </div> 
            </form>
            </div>
            <div class="col">
                <a href="{{route('users.create')}}" class="btn btn-outline-primary mt-4">Agregar Usuario</a>
            </div>
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
                            @if($user['role_id'] == 1)
                                Administrador   
                            @elseif($user['role_id'] == 2)
                                Usuario
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
    </div>
@endsection