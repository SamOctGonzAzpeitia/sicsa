@extends('test')

@section('seccion')


<div class="container" id="Servicios">
        <h3>Servicios</h3>
  </div>

  <div class="card-group">
    <div class="card text-center m-4">
      <img src="img/call.jpg" style="width: 450px; height: 250px" class="rounded mx-auto d-block" alt="...">
      <div class="card-body">
        <h5 class="card-title">Soporte Técnico</h5>
        <p class="card-text">SICSA le ofrece experiencia, responsabilidad y profesionalismo en sus servicios de soporte técnico. Lo cual le permitirá a su empresa minimizar los costos operativos, garantizar la seguridad, rendimiento y mejora de sus equipos de cómputo.</p>
      </div>
      
    </div>
    <div class="card text-center m-4">
      <img src="img/redess.jpg" style="width: 450px; height: 250px" class="rounded mx-auto d-block" alt="...">
      <div class="card-body">
        <h5 class="card-title">Instalación de Redes Estructuradas</h5>
        <p class="card-text">SICSA ofrece el servicio de red tanto para el mercado Industrial, comercial, gubernamental como residencial, o empresas que necesitan mejorar o diseñar sus redes informáticas basandose en las normas internacionales como estándares EIA/TIA.</p>
      </div>
      
    </div>
  </div>
  <div class="card-group">
  <div class="card text-center m-4">
    <img src="img/software.jpg" style="width: 450px; height: 250px" class="rounded mx-auto d-block" alt="...">
    <div class="card-body">
      <h5 class="card-title">Instalación de Software</h5>
      <p class="card-text">Instalación y configuración de programas, instalación de hardware, instalación de Antivirus, instalacion de Microsoft Office.</p>
    </div>
    
  </div>

  <div class="card text-center m-4">
    <img src="img/soportt.jpg" style="width: 450px; height: 250px" class="rounded mx-auto d-block" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mantenimiento a equipos de computo</h5>
      <p class="card-text">Ejecución de Antivirus, Copia de Seguridad, Formateo de Computadoras, Respaldos, Limpieza fisica de equipo.</p>
    </div>
    
  </div>
</div>

@endsection