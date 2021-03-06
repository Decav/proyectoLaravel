@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-lg-5 col-md-6 col-sm-12 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Registrar productos</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Descripcion</label>
                        <input type="text" id="descripcion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="marca-select" class="form-label">Marca</label>
                        <select id="marca-select" class="form-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="etiquetas-select" class="form-label">Etiquetas</label>
                        <select multiple="multiple" id="etiquetas-select">
                        </select>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar_productos-btn" class="btn btn-success">Registrar Productos</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/servicios/marcasService.js')}}"></script>
    <script src="{{asset('js/servicios/etiquetasService.js')}}"></script>
    <script src="{{asset('js/agregar_productos.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    
    
@endsection