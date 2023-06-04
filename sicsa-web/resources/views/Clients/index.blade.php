@extends('../Plantillas/layout')

@section('titulo')
    Clientes
@endsection

@section('seccion')

    <div class="container">
        <h3>Clientes</h3>
        <div class="row">
            <div class="col">
            <form action="{{route('clients')}}" class="" method="GET">
                <label for="">Buscar</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre, correo" name="filtro">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                </div> 
            </form>
            </div>
            <div class="col">
                <a href="{{route('clients.create')}}" class="btn btn-outline-primary mt-4">Agregar Cliente</a>
            </div>
        </div>
        
    </div>

    <div class="container">
        <hr>    
        <table class="table caption-top table-striped">
            <caption>Clientes</caption>
            <thead>
                <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">RFC</th>
                <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline link-underline-opacity-0" href="{{ url('/clients/show/'.$client['id']) }}">
                            {{$client['name']}}
                            </a>
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2" href="{{ url('/clients/show/'.$client['id']) }}">
                            {{$client['email']}}          
                            </a>
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline-opacity-0 " href="{{ url('/clients/show/'.$client['id']) }}">
                           {{$client['rfc']}}
                            </a>   
                            
                            
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline-opacity-0 " href="{{ url('/clients/show/'.$client['id']) }}">
                            {{$client['phone']}}
                        </td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$clients->links()}}
        </div>
        
        
    </div>
@endsection