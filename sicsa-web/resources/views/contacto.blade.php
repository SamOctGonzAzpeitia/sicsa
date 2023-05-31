@extends('Plantillas/test')

@section('seccion')


<div class="container"  id="Contacto">
    
        <h3>Contacto</h3>
    </div>
    <hr>

    <div class="container" >
			<form  method="POST" action="prueba1.php" class="needs-validation" >
				<div class="row">
    				<div class="col">
    				    <label for="exampleInputEmail1">Nombre</label>	
      				    <input type="text" class="form-control" placeholder="Nombre">
    			    </div>
    			    <div class="col">
    				    <label for="exampleInputEmail1">Apellidos</label>
      				    <input type="text" class="form-control" placeholder="Apellidos">
    			    </div>
  				</div>
  			<div class="form-group">

    			<label for="exampleInputEmail1">Email address</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
    			
  			</div>
  			<div class="form-group">
    			<label for="exampleFormControlTextarea1">Mensaje</label>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
                <br>
  				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
        <br><br>

        <div class="row">
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29861.117763097835!2d-100.5015176418769!3d20.684231583890842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35149108506b1%3A0x6bbf54142392e079!2sSanto%20Ni%C3%B1o%20de%20Praga%2C%20Quer%C3%A9taro!5e0!3m2!1ses-419!2smx!4v1592928405316!5m2!1ses-419!2smx" width="500" height="345" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col">
                    <img src="img/fb.jpg" style="width: 30px;height:30px ">
                    <a href= "https://www.facebook.com/sicsa.sicsa.7731?ref"> Sicsa Ingeniería</a>
                    <br><br>
                    <h7><img src="img/telefono2.jpg" style="width: 30px;height:30px ">(442) 2153873</h7>
                    <br><br>
                    <a href="https://wa.link/ihxwkd"><img src="img/wha2.jpg" style="width: 30px;height:30px ">442 7160438</a>
                    <br><br>
                    <h7><img src="img/email4.jpg" style="width: 30px;height:30px ">sicsa_ventas@prodigy.net.mx</h7>
                </div>
        </div>        
			
	    
    </div>

@endsection