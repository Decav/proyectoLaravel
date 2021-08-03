@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Registrar etiqueta</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar_etiqueta-btn" class="btn btn-success">Registrar Etiqueta</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped">
                <thead class="bg-success text-white">
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-etiqueta">
                </tbody>
            </table>
        </div>     
    </div>
    
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/etiquetasService.js')}}"></script>
    <script src="{{asset('js/etiquetas.js')}}"></script>
@endsection