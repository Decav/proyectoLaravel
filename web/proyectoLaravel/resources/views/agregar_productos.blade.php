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
                        <label for="stock-txt" class="form-label">Stock Referencial</label>
                        <input type="number" id="stock-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="precio-txt" class="form-label">Precio</label>
                        <input type="number" id="precio-txt" class="form-control">
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
    <script src="{{asset('js/servicios/marcasService.js')}}"></script>
    <script src="{{asset('js/agregar_productos.js')}}"></script>
@endsection