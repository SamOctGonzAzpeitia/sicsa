@extends('Plantillas/test')

@section('seccion')

<div class="container" id="Sistemas">
    
    <h3>Sistemas</h3>
</div>
<hr>


<div class="container">
    <div class="row">

        <div class="row cards" style="width: auto; margin: auto auto;">

        <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 m-2" style="max-width:319px;">
            <img src="img/Diapositiva1.jpg" class="card-img-top" alt="Card image" />

            <div class="card-block">
            <h4 class="card-title">Paquete Administrativo Integral</h4>
            <p class="card-text">Sistema de gestión con las áreas más importantes de la empresa que son los módulos: Ventas, Cuentas Por Cobrar, Cuentas por Pagar, Compras y Control de Inventarios.</p>
            <a href="{{route('contact')}}" class="btn btn-success">Info</a>
            </div>
        </div>

        <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 m-2 " style="max-width:319px;">
            <img src="img/Diapositiva2.jpg" class="card-img-top" alt="Card image" />

            <div class="card-block">
            <h4 class="card-title">P-V</h4>
            <p class="card-text">Esta solución lleva el control total de sus ventas, compras  con opción a la actualización de los precios de venta automáticamente proporcionando además   información del estado de su inventario.</p>
            <a href="{{route('contact')}}" class="btn btn-success">Info</a>
            </div>
        </div>

        <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 m-2 .img-fluid" style="max-width:319px;">
            <img src="img/Diapositiva3.jpg" class="card-img-top" alt="Card image" />

            <div class="card-block">
            <h4 class="card-title">CAC</h4>
            <p class="card-text">Implementacion de un control estricto de los ingresos de la Asociación así como los adeudos de los colonos, de igual manera, conocer de manera oportuna el status de cada lote.</p>
            <a href="{{route('contact')}}" class="btn btn-success">Info</a>
            </div>
        </div>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">

        <div class="row cards" style="width: auto; margin: auto auto;">

        <div class="card col-xs col-sm col-md col-lg col-xl m-2 .img-fluid" style="max-width:319px;">
            <img src="img/Diapositiva5.jpg" class="card-img-top" alt="Card image" />

            <div class="card-block">
            <h4 class="card-title">Conciliador CFDI</h4>
            <p class="card-text">Esta aplicación permite comparar los CFDIs emitidos en su empresa por su Sistema Administrativo comparado con los registros reportados en el Portal del SAT.</p>
            <a href="{{route('contact')}}" class="btn btn-success">Info</a>
            </div>
        </div>

        <div class="card col-xs col-sm col-md col-lg col-xl m-2 .img-fluid" style="max-width:319px;">
            <img src="img/Diapositiva6.jpg" class="card-img-top" alt="Card image" />

            <div class="card-block">
            <h4 class="card-title">Nóminas</h4>
            <p class="card-text">Está aplicación realiza la función de timbrar nóminas, tal como lo determina el SAT, cada timbre ocupa un CFDI y equivale a un recibo de nómina emitido a cada miembro de la empresa.</p>
            <a href="{{route('contact')}}" class="btn btn-success">Info</a>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection