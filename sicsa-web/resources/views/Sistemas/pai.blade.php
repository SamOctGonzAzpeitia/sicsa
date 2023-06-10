@extends('Plantillas/test')
@section('titulo')
    PAI
@endsection
@section('seccion')

<div class="p-5 mb-4 bg-body-tertiary rounded-3" style="background-image: url('img/fd_pai4.jpg'); width: 1200px;">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Paquete Administrativo Integral</h1>
        <p class="col-md-8 fs-4">Nuestro sistema administrativo es una solución completa y eficiente diseñada para simplificar y agilizar la gestión de tu negocio. Con una interfaz intuitiva y funciones avanzadas, nuestro sistema te permitirá optimizar tus procesos administrativos y tomar decisiones informadas para el crecimiento y el éxito de tu empresa.</p>
        <a href="{{ route('contact') }}" class="btn btn-success btn-lg" type="button">Contáctanos</a> 
      </div>
</div>

<div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-1">Gestión Integral</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2">Seguridad y protección de datos</a>
      <a class="list-group-item list-group-item-action" href="#list-item-3">Beneficios</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Diferenciadores</a>
    </div>
  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id="list-item-1">Gestión Integral</h4>
          <p>Nuestro sistema abarca todas las áreas clave de tu negocio, desde la administración de clientes y proveedores hasta la contabilidad y la gestión de inventario. Con una plataforma centralizada, podrás tener un control completo y una visión panorámica de todas tus operaciones.</p>
          <h5>Control de ingresos y egresos: </h5>
          <p>Lleva un registro preciso de todos los ingresos y egresos de tu negocio. Nuestro sistema te permite registrar y categorizar de forma sencilla todas las transacciones financieras, incluyendo ventas, compras, gastos operativos y más. Obtén informes detallados y gráficos que te ayudarán a tener una visión clara de la situación financiera de tu empresa.</p>
          <h5>Facturación completa: </h5>
          <p>Simplifica el proceso de facturación con nuestra herramienta integrada. Genera facturas personalizadas, administra los registros de clientes, controla los pagos pendientes y realiza un seguimiento de los estados de las facturas. Además, nuestro sistema es compatible con los requerimientos fiscales vigentes, garantizando el cumplimiento normativo en tus facturas.</p>
          <img src="img/administrar.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-2">Seguridad y protección de datos</h4>
          <p>La seguridad de tu información es nuestra prioridad. Nuestro sistema cuenta con medidas de seguridad para proteger tus datos confidenciales y garantizar la privacidad de tus clientes. Mantén la tranquilidad sabiendo que tu información está protegida.</p>
          <img src="img/secpai.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-3">Beneficios</h4>
          <h5>Eficiencia mejorada: </h5>
          <p>Optimiza tus procesos comerciales y reduce el tiempo dedicado a tareas administrativas, lo que te permitirá enfocarte en brindar un servicio excepcional a tus clientes.</p>
          <h5>Control de inventario preciso: </h5>
          <p>Mantén un control completo de tu inventario, evitando excesos o faltantes y maximizando la eficiencia de tus operaciones.</p>
          <h5>Adaptabilidad a cualquier tamaño de negocio: </h5>
          <p>Nuestra solución es escalable y se adapta a tus necesidades, ya sea que tengas un negocio pequeño o una cadena de tiendas en expansión.</p>
          <img src="img/graphs.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-4">Diferenciadores</h4>
          <h5>Experiencia y expertise: </h5>
          <p>Contamos con un equipo de desarrollo con amplia experiencia en el desarrollo de sistemas administrativos para diversos sectores empresariales.</p>
          
          <h5>Soporte técnico y actualizaciones:</h5>
          <p>Ofrecemos un sólido soporte técnico para resolver cualquier duda o inconveniente que puedas</p>
          <img src="img/support.jpg" alt="" style="width: 400px; height: 200px;">
    </div>
  </div>
</div>

@endsection