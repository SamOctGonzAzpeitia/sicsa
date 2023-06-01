@extends('../Plantillas/layout')

@section('titulo')
    Servicios
@endsection

@section('seccion')

    <div class="container">
        <h3>Servicios</h3>
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
                <label for="">Fecha de inicio</label>
                <input type="date" class="form-control">
            </div>
            <div class="col">
                <label for="">Fecha final </label>
                <input type="date" class="form-control">
            </div>
            <div class="col">
                <a href="" class="btn btn-outline-primary">Agregar Servicio</a>
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
                        <td>{{$service['name']}}</td>
                        <td>{{$service['description']}}</td>
                        <td>{{$service['client']}}</td>
                        <td>{{$service['status']}}</td>
                        <td>{{$service['fecha_inicio']}}</td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection