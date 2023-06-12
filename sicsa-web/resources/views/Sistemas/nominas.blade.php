@extends('Plantillas/test')
@section('titulo')
    Nominas
@endsection
@section('seccion')

    <div class="p-5 mb-4 bg-body-tertiary rounded-3" style="background-image: url('img/fd_nominas1.jpg'); width: 1200;">
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
        <h4 id="list-item-1"> Características principales</h4>
          <p>Nuestro sistema te brinda una herramienta precisa y segura para generar facturas de nóminas, facilitando así la administración de tus recursos humanos y grantizando el cumplimiento legal.</p>
          <h5>Generación rápida y precisa de facturas de nóminas: </h5>
          <p>Nuestro sistema te permite generar de manera rápida y eficiente las facturas de nóminas de tus empleados, evitando largos procesos manuales y reduciendo la posibilidad de errores en los cálculos.</p>
          <h5>Registro centralizado de datos de empleados: </h5>
          <p>Podrás mantener un registro organizado y centralizado de los datos de tus empleados, incluyendo información personal, salarial y fiscal. Esto facilita la gestión y actualización de la información, así como la generación de reportes detallados.</p>
          <h5>Personalización de conceptos y variables salariales:</h5>
          <p>El sistema te permite personalizar los conceptos y variables salariales de acuerdo con las necesidades específicas de tu empresa. Podrás definir y configurar elementos como bonos, comisiones, horas extras, entre otros, adaptándolos a tus políticas internas.</p>
          <h5>Generación de informes y análisis:</h5>
          <p>Podrás generar informes detallados y análisis sobre las nóminas, facilitando la toma de decisiones estratégicas. Obtén insights sobre los costos laborales, comparativas salariales, tendencias y otros datos relevantes para una gestión eficiente de los recursos humanos.</p>
          <img src="img/empleados.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-2"> Seguridad y protección de datos</h4>
          <p>La seguridad de los datos es una prioridad. Nuestro sistema garantiza estándares de seguridad y privacidad, protegiendo la información sensible de tus empleados.</p>
          <img src="img/secpai.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-3">Beneficios</h4>
          <h5>Agilidad y precisión: </h5>
          <p>Con nuestro sistema, podrás generar rápidamente facturas de nóminas precisas, evitando errores y retrasos en el proceso de facturación. Los cálculos automáticos de impuestos y deducciones garantizan la exactitud de los montos a pagar.</p>
          <h5>Gestión eficiente: </h5>
          <p>Nuestro sistema te permite tener un registro centralizado y ordenado de los datos de tus empleados, facilitando la gestión y actualización de la información laboral, salarial y fiscal.</p>
          <h5>Adaptabilidad y personalización:</h5>
          <p>Puedes personalizar los conceptos y variables salariales según las necesidades de tu negocio, brindándote flexibilidad para adaptar el sistema a tus procesos y políticas internas.</p>
          <h5>Cumplimiento normativo: </h5>
          <p>Estamos actualizados con las regulaciones fiscales y normas del SAT, asegurando que tus facturas de nóminas cumplan con los requisitos legales en todo momento.</p>
          <img src="img/trabajos.jpg" alt="" style="width: 400px;">
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