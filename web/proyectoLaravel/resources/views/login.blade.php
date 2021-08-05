<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Login Usuario</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
                <span class="navbar-brand text-light">BaraTop</span>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('login')}}">Ingresar</a>
                        <a class="nav-link text-light" href="{{route('register')}}">Registrarse</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid”)">
        <div class="row mt-5">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">          
                <div class="card">
                    <div class="card-header bg-success">
                        <span class="text-light">Ingresar a la plataforma</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="email-txt" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" id="email-txt" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="contraseña-txt" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña-txt">
                            </div>
                        </form>     
                    </div>
                    <div class="card-footer d-grid gap-1">
                        <button type="submit" class="btn btn-success" id="login-btn">Ingresar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> 
    <script src="{{asset('js/axios_config.js')}}"></script>
    <script src="{{asset('js/servicios/usuariosService.js')}}"></script>
    <script src="{{asset('js/register.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>



