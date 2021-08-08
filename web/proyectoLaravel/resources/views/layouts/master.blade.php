<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
    



    <title>BaraTop Home Page</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-light">BaraTop</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('home')}}">BaraTop</a>
                        <a class="nav-link text-light" href="{{route('agregar_negocio')}}">Agregar negocio</a>
                        <a class="nav-link text-light" href="{{route('ver_negocio')}}">Ver negocios</a>
                        <a class="nav-link text-light" href="{{route('agregar_productos')}}">Agregar productos</a>
                        <a class="nav-link text-light" href="{{route('ver_productos')}}">Ver productos</a>
                        <a class="nav-link text-light" href="{{route('etiquetas')}}">Etiquetas</a>
                    </div>
                </div>
                <div> 
                    <button class="btn btn-danger" id="cerrar_sesion-btn">
                        <span>Cerrar sesion</span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid”)">
        @yield("contenido")

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> 
    <script src="{{asset('js/axios_config.js')}}"></script>
    <script src="{{asset('js/sesion.js')}}"></script>
    <script src="{{asset('js/master.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield("javascript")

  </body>
</html>