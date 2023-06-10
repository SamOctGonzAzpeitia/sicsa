@extends('Plantillas/test')
@section('titulo')
    Nominas
@endsection
@section('seccion')

    <div class="p-5 mb-4 bg-body-tertiary rounded-3" style="background-image: url('img/fd_nominas.jpg'); width: 1200;">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Timbrado de Nóminas</h1>
            <p class="col-md-8 fs-4">Sistema de timbrado de nóminas eficiente y confiable para una gestión laboral sin complicaciones es la solución ideal para simplificar y agilizar el proceso de facturación de salarios de tus empleados.</p>
            <a href="{{ route('contact') }}" class="btn btn-success btn-lg" type="button">Contáctanos</a> 
        </div>
    </div>

    <div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-1">Características principales</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2">Seguridad y protección de datos</a>
      <a class="list-group-item list-group-item-action" href="#list-item-3">Beneficios</a>
      <a class="list-group-item list-group-item-action" href="#list-item-4">Diferenciadores</a>
    </div>
  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id="list-item-1">Características principales</h4>
          <p>Nuestro sistema cuenta con las características necesarias y una interfaz intuitiva, para gestionar eficientemente las cuotas, rentas y otros aspectos administrativos, brindando una experiencia excepcional tanto para los colonos como para la administración.</p>
          <h5>Gestión de cuotas y pagos: </h5>
          <p>Nuestro sistema te permite llevar un seguimiento preciso de las cuotas de mantenimiento o administrativas de los colonos. Podrás generar facturas, gestionar los pagos y mantener un registro claro de los pagos realizados.</p>
          <h5>Registro de colonos: </h5>
          <p>Con nuestra solución, podrás mantener una base de datos completa de todos los colonos, incluyendo información personal, datos de contacto y detalles de propiedad. Esto facilitará la comunicación y la gestión de información relevante.</p>
          <h5>Gestión de rentas:</h5>
          <p>Si tu comunidad cuenta con propiedades en alquiler, nuestro sistema te permitirá llevar un registro de las rentas, generar recibos y gestionar los pagos de los inquilinos.</p>
          <h5>Informes y análisis:</h5>
          <p>Obtén informes detallados sobre el estado financiero de la comunidad, seguimiento de pagos, ocupación de propiedades y otros indicadores relevantes. Esto te permitirá tomar decisiones informadas y estratégicas para la administración de la comunidad.</p>
          <img src="img/colonia.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-2">Seguridad y protección de datos</h4>
          <p>La seguridad de tu información y la de tus clientes es una prioridad para nosotros. Nuestro sistema cuenta con medidas de seguridad para proteger los datos confidenciales y garantizar la privacidad en todas las transacciones.</p>
          <img src="img/secpai.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-3">Beneficios</h4>
          <h5>Administración eficiente: </h5>
          <p>Optimiza tus tareas administrativas y simplifica procesos como la generación de facturas, registro de pagos, control de accesos y comunicación con los colonos.</p>
          <h5>Organización y precisión: </h5>
          <p>Lleva un registro preciso de las cuotas, rentas y otros aspectos financieros, evitando errores y facilitando la conciliación de cuentas.</p>
          <h5>Comunicación efectiva:</h5>
          <p>Mantén una comunicación transparente y oportuna con los colonos, mejorando la satisfacción y fomentando una comunidad cohesionada.</p>
          <h5>Ahorra tiempo y recursos: </h5>
          <p>Automatiza tareas rutinarias y reduce el tiempo dedicado a la gestión manual, permitiéndote enfocarte en tareas estratégicas y de mayor valor.</p>
          <img src="img/cuotas.jpg" alt="" style="width: 400px;">
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