@extends("layouts.master")

@section("contenido")
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
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/ver_productos.js')}}"></script>
@endsection