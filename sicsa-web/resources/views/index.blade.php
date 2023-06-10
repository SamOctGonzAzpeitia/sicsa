@extends('Plantillas/test')

@section('titulo')
    SICSA
@endsection

@section('seccion')


<div class="mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="/img/nos2.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white">Nosotros</h5>
                        <h6 style="color: white">Con mas de 20 años en el medio, hemos desarrollado distintas aplicaciones administrativas en los diferentes ramos económicos .</h6>
                    </div>
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="/img/system.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white">Sistemas</h5>
                        <h6 style="color: white">Deja que nuestras soluciones resuelvan sus problemas de información.</h6>
                    </div>
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="/img/cfdi.png">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white">Actualizate a CFDI 4.0!</h5>
                        <h6 style="color: white">Evita problemas y actualiza tu sistema con nosotros</h6>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-lg">
                <img src="img/mision.jpg" width="200" height="200" class="bd-placeholder-img rounded-circle">
                <h2>Misión</h2>
                <p>Proporcionar servicios integrales de informática a las empresas en general, para la mejora de la calidad de la información de negocio que les permita la toma oportuna de decisiones.</p>
                
            </div>
            
            <div class="col-lg">
                
                <img src="img/vision.jpg" width="200" height="200" class="bd-placeholder-img rounded-circle">
                <h2>Visión</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                
            </div>
        </div>
    </div>

@endsection