@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
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
                                        <label for="nombre-txt" class="form-label">Nombre de usuario</label>
                                        <input type="text" id="nombre-txt" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mail-txt" class="form-label">Correo Electronico</label>
                                        <input type="text" id="mail-txt" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tipo-rb" class="form-label">¿Posee negocio?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo-rb" id="tipo-rb" value="si">
                                            <label class="form-check-label" for="tipo-rb">Si</label>
                                      </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo-rb" id="tipo-rb" value="no">
                                            <label class="form-check-label" for="tipo-rb">No</label>
                                          </div>
                                    </div>
                                </div>
                                <div class="card-footer d-grid gap-1">
                                    <button id="registrar_usuario-btn" class="btn btn-success">Registrar Usuario</button>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div>
            </div>
        </div>    
    </div>    
@endsection
@section("javascript")
    
@endsection