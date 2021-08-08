@extends("layouts.master")

@section("contenido")
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <span>Filtrar</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtro-cbx">
                        <option value="todos">Todos</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped">
                <thead class="bg-success text-white">
                    <tr>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Marca</td>
                        <td>Etiqueta</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-productos">
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/etiquetasService.js')}}"></script>
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/ver_productos.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
 
@endsection