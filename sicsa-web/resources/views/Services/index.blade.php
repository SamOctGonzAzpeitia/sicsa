<script src="{{asset('/js/service.js')}} "></script>
@extends('../Plantillas/layout')

@section('titulo')
    Servicios
@endsection

@section('seccion')

    <div class="container">
        <h3>Servicios</h3>
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show">
            
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <form action="{{ route('services') }}" method="GET">
                    <label for="filtro">Buscar</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nombre, descripción" name="filtro">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                    </div> 
                </form>
            </div>
            <div class="col">
                <form action="{{ route('services.dateFilter') }}" method="GET">
                <label for="date">Fecha de inicio</label>
                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">
            </div>
            <div class="col">
                <label for="date">Fecha de fin</label>
                <input type="date" class="form-control" name="fecha_fin" id="fecha_fin">
            </div>
            <div class="col mb-2">
            <button type="submit" class="btn btn-outline-primary mt-4">Filtrar</button>
            </div>
            
            </form>
        </div>
        <div class="row">
            @can('filtroClientes')
            <div class="col">
                <form action="{{ route('services.clientFilter') }}" method="GET">
                    <label for="">Cliente</label>
                    <select name="client_id" id="client_id" class="form-select">
                        <option value="">Selecciona un cliente</option>
                        @foreach ($clients as $client)
                            <option value="{{$client['id']}}">{{$client['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col mb-2">
                <button type="submit" class="btn btn-outline-primary mt-4">Filtrar</button>
                </form>
            </div>
            @endcan
            <div class="col">
                
                <a href="{{route('services.create')}}" class="btn btn-outline-primary mt-4">Agregar Servicio</a>
            </div>
        </div>
        
    </div>

    <div class="container">
        <hr>    
        <table class="table caption-top table-striped">
            <caption>Servicios</caption>
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cliente</th>
                <th scope="col">Status</th>
                <th scope="col">Fecha de inicio</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <th scope="row">{{$service['id']}}</th>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline link-underline-opacity-0" href="{{ url('/services/show/'.$service['id']) }}">
                            {{$service['name']}}
                            </a>
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 " href="{{ url('/services/show/'.$service['id']) }}">
                            {{$service['description']}}
                            </a>
                            </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2" href="{{ url('/services/show/'.$service['id']) }}">
                            
                            {{$clients[$service['client_id']-1]['name']}}
                            </a>
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 " href="{{ url('/services/show/'.$service['id']) }}">
                            @if ($service['status_id'] == 1)
                                <span class="badge bg-success">Activo</span>
                            @elseif ($service['status_id'] == 2)
                                <span class="badge bg-danger">Finalizado</span>
                            @endif
                            </a>
                        </td>
                        <td>
                            <a style="text-decoration:none" class="link-dark link-offset-2 link-underline-opacity-0 " href="{{ url('/services/show/'.$service['id']) }}">
                            {{$service['fecha_inicio']}}
                        </td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$services->links()}}
        </div>
    </div>
@endsection