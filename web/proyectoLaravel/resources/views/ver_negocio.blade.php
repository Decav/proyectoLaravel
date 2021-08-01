@extends("layouts.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped">
                <thead class="bg-success text-white">
                    <tr>
                        <td>Patente</td>
                        <td>Nombre</td>
                        <td>Direccion</td>
                        <td>Numero de contacto</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">
                </tbody>
            </table>

        </div>
    </div>
@endsection

@section("javascript")

@endsection