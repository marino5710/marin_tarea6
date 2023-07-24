<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de ingreso de clientes</h1>
        <div class="row justify-content-center">
            <form class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="cliente_id" id="cliente_id" >
                <div class="row mb-3">
                    <div class="col">
                    <label for="cliente_nombre">Nombre del cliente</label>
                        <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nit">Nit del cliente</label>
                        <input type="text" name="cliente_nit" id="cliente_nit" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" id="btnGuardar" class="btn btn-primary w-100">Guardar</button>
                    </div>
                    <div class="col">
                        <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
                    </div>
                    <div class="col">
                        <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
                    </div>
                    <div class="col">
                        <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row justify-content-center" id="divTabla">
            <div class="col-lg-8">
                <h2>Listado de Clientes</h2>
                <table class="table table-bordered table-hover" id="tablaClientes">
                    <thead class="table-dark">
                        <tr>
                            <th>NO. </th>
                            <th>NOMBRE</th>
                            <th>NIT</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../../src/js/funciones.js"></script>
    <script src="../../src/js/clientes/index.js"></script>
<?php include_once '../../includes/footer.php'?>