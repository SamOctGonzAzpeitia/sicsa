<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/76fa277871.js" crossorigin="anonymous"></script>
    
    <title> Sicsa</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-md navbar-light bg-light mb-5">
    <div class="container-fluid">
      <img  src="img/logo.png" width="150" height="90" href="#">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item px-2 mr-auto">
                    <a class="nav-link h5" href="">Inicio</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link h5"  href="">Servicios</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link h5" href="">Sistemas</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link h5" href="">Contacto</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" hidden>
                        <li><a class="dropdown-item" href="">Iniciar Sesión</a></li>
                        
                        
                    </ul> -->
                </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    @yield('seccion')
  </div>  
      
  <hr>
  <footer class="m-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <p><i class="bi bi-envelope"></i> sicsa2004@prodigy.net.mx</p>
            <p><i class="bi bi-phone"></i> 442-215-38-73</p>
          </div>
          <div class="col">
            <p><i class="bi bi-facebook"></i> <a href= "https://www.facebook.com/sicsa.sicsa.7731?ref"> Sicsa</p>
            <p><i class="bi bi-whatsapp"></i> <a href="https://wa.link/ihxwkd"> 442-716-04-38</p>
          </div>
        </div>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    
  </body>
</html>

