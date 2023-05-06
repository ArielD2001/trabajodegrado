<div class="row">

    <ul class="nav nav-tabs mx-2 " id="myTab" role="tablist ">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profesores</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Administradores</button>
        </li>

    </ul>
    <div class="tab-content mt-2" id="myTabContent">
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
                                            <input type="text" class="form-control" id="apellido" placeholder="Apellido"
                                                name="apellido" />
                                        </div>

                                        <div class="col-6 mt-2">
                                            <label class="form-label" for="documento">Documento:</label>
                                            <input type="number" class="form-control" id="documento"
                                                placeholder="Documento" name="documento" />
                                        </div>

                                        <div class="col-6 mt-2">
                                            <label class="form-label" for="telefono">Telefono:</label>
                                            <input type="number" class="form-control" id="telefono"
                                                placeholder="Telefono" name="telefono" />
                                        </div>

                                        <div class="col-6 mt-2">
                                            <label class="form-label" for="correo">Correo:</label>
                                            <input type="email" class="form-control" id="correo" placeholder="Correo"
                                                name="correo" />
                                        </div>

                                        <div class="col-6 mt-2">
                                            <label for="contraseña">Contraseña: </label>
                                            <div class="input-group pt-1">
                                                <input type="password" class="form-control "
                                                    aria-label="Dollar amount (with dot and two decimal places)" id="password" name="clave">
                                                <span class="input-group-text" id="eye"><i class="mdi mdi-eye"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-2">
                                            <label class="form-label" for="rol">Rol:</label>
                                            <select name="rol" id="rol" class="form-select">
                                                <option value="" default>Seleccionar rol</option>
                                                <option value="ADMIN">Administrador</option>
                                                <option value="PROFESOR">Profesor</option>
                                            </select>
                                        </div>




                                        <div class="col-6 pt-1">
                                            <button type="button" name="agregar-list"
                                                class="w-100 col-6 btn btn-success mt-4" id="agregar-user">Crear
                                                usuario</button>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2 text-danger fst-italic" id="resultado-list">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        <div class="tab-pane fade show active mt-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">

            <?php
                    $rol = 'PROFESOR';
                    $tabla = 'tabla1';
                    include('elements/tableUsers.php');
                ?>

        </div>
        <div class="tab-pane fade mt-3  " id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

            <?php
                    $rol = 'ADMIN';
                    $tabla = 'tabla2';
                    include('elements/tableUsers.php');
                ?>
        </div>

    </div>
</div><!-- /.modal -->