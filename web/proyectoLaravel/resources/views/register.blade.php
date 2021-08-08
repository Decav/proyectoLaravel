@extends("layouts.logmaster")

@section("contenidoLogin")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">          
            <div class="card">
                <div class="card-header bg-success">
                    <span class="text-light">Registrarse en la plataforma</span>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre_usuario-txt" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="nombre_usuario-txt">
                        </div>
                        <div class="mb-3">
                            <label for="correo_electronico-txt" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="correo_electronico-txt">
                        </div>
                        <div class="mb-3">
                            <label for="clave-txt" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="clave-txt">
                        </div>
                        <div class="mb-3">
                            <label for="confirmar_clave-txt" class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="confirmar_clave-txt">
                        </div>    
                </div>
                <div class="card-footer d-grid gap-1">
                    <button type="submit" class="btn btn-success" id="register-btn">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('vendor/clavePlugin/dist/js/jquery.passtrength.min.js')}}"></script>
    
    <script src="{{asset('js/servicios/usuariosService.js')}}"></script>
    <script src="{{asset('js/register.js')}}"></script>
    
@endsection