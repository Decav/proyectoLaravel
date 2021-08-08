@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Panel de administracion BaraTop</span>
                </div>
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-12 col-md-6 col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-header bg-success text-white">
                                    <span>Agregar Usuarios</span>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nombre_usuario-txt" class="form-label">Nombre de usuario</label>
                                        <input type="text" id="nombre_usuario-txt" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo_electronico-txt" class="form-label">Correo Electronico</label>
                                        <input type="text" id="correo_electronico-txt" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"for="tipo-rb">¿Posee negocio?</label>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="tipo-si" 
                                            name="tipo-rb" class="form-check-input">
                                            <label for="tipo-si" class="form-check-label">Si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input  checked type="radio" id="tipo-no" 
                                            name="tipo-rb" class="form-check-input">
                                            <label for="tipo-no" class="form-check-label">No</label>  
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-grid gap-1">
                                    <button id="registrar_usuario-btn" class="btn btn-success">Registrar Usuario</button>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12 col-md-12 col-lg-6 mx-auto">
                            <table class="table table-hover table-bordered table-striped">
                                <thead class="bg-success text-white">
                                    <tr>
                                        <td>Nombre</td>
                                        <td>CorreoElectronico</td>
                                        <td>Tipo</td>
                                        <td>Acciones</td>
                                    </tr>
                                </thead>
                                <tbody id="tbody-usuario">
                                </tbody>
                            </table>
                        </div>   
                    </div>    
                </div>
            </div>
        </div>    
    </div>    
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/usuariosService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection