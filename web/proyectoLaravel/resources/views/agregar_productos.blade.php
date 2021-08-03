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
                    <div class="directorist-select directorist-select-multi" id="multiSelect" data-isSearch="true" data-multiSelect='[{value: "abul", key: 0}]' data-max="5">
                        <select name="multiSelect" >
                          <option value="">Select Item</option>
                          <option value="abul">Abul</option>
                          <option value="bacco">Bacco</option>
                          <option value="bodri">Bodri</option>
                          <option value="canmia">Canmia</option>
                          <option value="choncol">Choncol</option>
                          <option value="condon">Condon</option>
                          <option value="chalek">Chalek</option>
                          <option value="deloar">Deloar</option>
                          <option value="dulon">Dulon</option>
                          <option value="dipu">Dipu</option>
                          <option value="dulal">Dulal</option>
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
    <script src="{{asset('vendor/pureScriptSelect-master/script.js')}}"></script>
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/servicios/marcasService.js')}}"></script>
    <script src="{{asset('js/agregar_productos.js')}}"></script>
@endsection