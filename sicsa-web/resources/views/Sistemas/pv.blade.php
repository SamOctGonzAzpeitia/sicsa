@extends('Plantillas/test')
@section('titulo')
    Punto de Venta
@endsection
@section('seccion')

    <div class="p-5 mb-4 bg-body-tertiary rounded-3" style="background-image: url('img/fd_pv3.jpg'); width: 1200;">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Punto de Venta</h1>
            <p class="col-md-8 fs-4">Nuestro sistema de punto de venta es una solución completa y eficiente diseñada para simplificar tus procesos de venta, agilizar tus transacciones y mejorar la experiencia de tus clientes.</p>
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
          <p>Ya sea que dirijas una pequeña tienda local o una cadena de tiendas, nuestro sistema te brinda las herramientas necesarias para mejorar la eficiencia en tus operaciones comerciales y facilitar la administración de tu negocio. Con una interfaz intuitiva y funciones avanzadas, podrás optimizar tus procesos de venta y obtener un mayor control sobre tus operaciones.</p>
          <h5>Gestión de productos: </h5>
          <p>Lleva un registro preciso de todos los ingresos y egresos de tu negocio. Nuestro sistema te permite registrar y categorizar de forma sencilla todas las transacciones financieras, incluyendo ventas, compras, gastos operativos y más. Obtén informes detallados y gráficos que te ayudarán a tener una visión clara de la situación financiera de tu empresa.</p>
          <h5>Punto de venta rápido y seguro: </h5>
          <p>Agiliza tus transacciones con nuestro punto de venta intuitivo. Realiza ventas de forma rápida y segura, ya sea mediante la búsqueda de productos, escaneo de códigos de barras o selección de elementos desde una lista. Acepta diferentes métodos de pago, incluyendo tarjetas de crédito, efectivo y otros.</p>
          <h5>Generación de informes y análisis:</h5>
          <p>Accede a informes y análisis en tiempo real para evaluar el rendimiento de tu negocio. Obtén datos sobre ventas, productos más vendidos, rentabilidad y otros indicadores clave que te ayudarán a tomar decisiones informadas y estratégicas.</p>
          <h5>Adaptabilidad a cualquier tamaño de negocio:</h5>
          <p>Nuestro sistema está diseñado para adaptarse a las necesidades de cualquier tamaño de negocio. Desde una tienda individual hasta una cadena de tiendas, nuestra solución puede escalar y ajustarse según el crecimiento de tu negocio, brindándote flexibilidad y funcionalidad en cada etapa.</p>
          <img src="img/reports.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-2">Seguridad y protección de datos</h4>
          <p>La seguridad de tu información y la de tus clientes es una prioridad para nosotros. Nuestro sistema cuenta con medidas de seguridad para proteger los datos confidenciales y garantizar la privacidad en todas las transacciones.</p>
          <img src="img/secpai.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-3">Beneficios</h4>
          <h5>Control financiero integral: </h5>
          <p>Mantén un control preciso de tus ingresos, egresos y estados financieros, lo que te permitirá tomar decisiones basadas en datos sólidos y aumentar la rentabilidad de tu negocio.</p>
          <h5>Eficiencia en la facturación: </h5>
          <p>Simplifica y agiliza el proceso de facturación, reduciendo el tiempo dedicado a la generación y seguimiento de facturas, y mejorando la gestión de pagos.</p>
          <h5>Cumplimiento normativo: </h5>
          <p>Nuestro sistema de facturación cumple con los requerimientos fiscales vigentes, garantizando la legalidad y validez de tus facturas.</p>
          <img src="img/fd_pv.jpg" alt="" style="width: 400px;">
        <h4 id="list-item-4">Diferenciadores</h4>
          <h5>Experiencia y expertise: </h5>
          <p>Contamos con un equipo de desarrollo con amplia experiencia en el desarrollo de sistemas administrativos para diversos sectores empresariales.</p>
          <h5>Personalización y flexibilidad:</h5>
          <p>Nuestro sistema de punto de venta es altamente personalizable para adaptarse a tus necesidades específicas. Podrás configurar categorías de productos, precios, promociones y más, según tus requerimientos comerciales.</p>
          <h5>Soporte técnico y actualizaciones:</h5>
          <p>Ofrecemos un sólido soporte técnico para resolver cualquier duda o inconveniente que puedas</p>
          <img src="img/support.jpg" alt="" style="width: 400px; height: 200px;">
    </div>
  </div>
</div>

@endsection