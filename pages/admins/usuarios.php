<div class="row">
    <div class="d-flex justify-content-end align-items-center container">

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#centermodal"> + Crear
            nuevo usuario</button>
    </div>
    <div class="modal fade " id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered text-start">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel"> Crear usuario</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body ">

                    <div class="container">
                        <div class="row border p-3 rounded">
                            <form method="post" id="formulario-user">
                                <div class="row ">
                                    <div class="col-6">
                                        <label class="form-label" for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre"
                                            name="nombre" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="apellido">Apellido:</label>
                                        <input type="text" class="form-control" id="apellido" placeholder="apellido"
                                            name="apellido" />
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label class="form-label" for="documento">Documento:</label>
                                        <input type="text" class="form-control" id="documento" placeholder="documento"
                                            name="documento" />
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label class="form-label" for="correo">Correo:</label>
                                        <input type="text" class="form-control" id="correo" placeholder="correo"
                                            name="correo" />
                                    </div>

                                    <div class="col-6 mt-2">
                                        <label class="form-label" for="contraseña">Contraseña:</label>
                                        <input type="text" class="form-control" id="contraseña" placeholder="contraseña"
                                            name="contraseña" />
                                    </div>


                                    <div class="col-6 pt-1">
                                        <button type="button" name="agregar-list"
                                            class="w-100 col-6 btn btn-success mt-4" id="agregar-user">Crear
                                            usuario</button>
                                    </div>
                                </div>
                                <div class="col-12 mt-1" id="resultado-list">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->