<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/76fa277871.js" crossorigin="anonymous"></script>
    
    <title>Login</title>
</head>


<body class="mb-6" style="background-color: #7CF5B2">
    <div class="container position relative mt-5" >
        <div class="card rounded mx-auto d-block border-dark " style="width: 35rem;">
            <img src="img/logo.png" class="card-img-top-center rounded mx-auto d-block img-thumbnail mt-1"   alt="..." width="300" height="200">
                  
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="row m-3">
                <label for="email" class="form-label">Correo</label>
                
                    <input type="text" class="form-contorl" name="email" value="{{ old('email') }}" style="width: 28rem;">
                </div>
                <div class="row m-3">
                    <label for="password" class="form-label">Contraseña</label>
               
                    <input type="password" class="form-contorl" name="password" style="width: 28rem;">
                </div>

                <input type="submit" class="btn btn-primary m-3" value="Iniciar Sesión" >
                @error('email')
                    <div class="alert alert-danger alert-dismissible fade show">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror
            </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>