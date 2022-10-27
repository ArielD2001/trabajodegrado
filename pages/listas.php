<?php
include('databases/connectToBD.php');

$consulta = "SELECT * from usuarios WHERE id = ?";
$sentencia = $mbd->prepare($consulta);
$sentencia->bindParam(1, $id);
$sentencia->execute();
$filas = $sentencia->rowCount();
//echo $filas;

if ($filas > 0) {
    $resultado = $sentencia->fetch();
    $nombre  = $resultado['nombre'];
    $apellido  = $resultado['apellido'];
}


$consulta2 = "SELECT * from listas";
$sentencia2 = $mbd->prepare($consulta2);
$sentencia2->execute();
$filas2 = $sentencia2->rowCount();


?>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<div class="contenedor">
    <div class="row   px-3 my-3">
        <div class="col-6  ">
            <h3>Listas</h3>
        </div>
        <div class="col-6 justify-content-end  d-flex align-items-center">
            <span class="h6"><?php echo date('d/m/y') . ' - ' ?>
                <div class="hora_hoy" style="display: inline;">00:00:00</div>
            </span>
        </div>
    </div>
    <script>
        setInterval(function() {
            var hoy = new Date();
            var hora_h = hoy.getHours() < 10 ? '0' + hoy.getHours() : hoy.getHours();
            var hora_m = hoy.getMinutes() < 10 ? '0' + hoy.getMinutes() : hoy.getMinutes();
            var hora_s = hoy.getSeconds() < 10 ? '0' + hoy.getSeconds() : hoy.getSeconds();
            var hora = hora_h + ":" + hora_m + ":" + hora_s;
            document.querySelector(".hora_hoy").innerHTML = hora;
        }, 1000);
    </script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row container">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#centermodal">Agregar lista</button>
                            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content text-start ">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myCenterModalLabel">Agregar lista</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body    ">
                                            <form method="post" id="formulario-list" accept=".xlsx">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <label class="form-label" for="nombre">Nombre:</label>
                                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre de lista" autocomplete="off" name="nombre-list">
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="form-label" for="semestre">Semestre</label>
                                                        <input type="text" class="form-control" id="semestre" placeholder="Semestre" autocomplete="off" name="semestre-list">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 mb-2" id="resultado-list"></div>
                                                <div class="d-flex justify-content-center">
                                                    <button type="button" name="agregar-list" class="w-100 btn-large mt-2 btn btn-success " id="agregar-list">Agregar Lista</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                        <?php
                        if ($filas2 < 1) {
                        ?>

                            <div class="col-12 d-flex flex-column align-items-center">
                                <img src="../assets/images/layouts/not-found.png" draggable="false" width="300px" alt="No hay ningun registro!" style="opacity: .8;">
                                <span class="h4">No se encontraron Listas</span>
                            </div>
                        <?php
                        } else {
                            $datos = $sentencia2->fetchAll();
                        ?>
                            <div class=" flex-wrap d-flex justify-content-center mt-3">
                                <?php
                                foreach ($datos as $dato) {
                                ?>
                                    <div class="tasks border w-25" style="min-width: 300px;">

                                        <div id="task-list-two" class="task-list-items">

                                            <!-- Task Item -->
                                            <div class="card mb-0">
                                                <div class="card-body p-3">
                                                    <small class="float-end text-muted"><?php echo $dato['fecha']; ?></small>
                                                    <span class="badge bg-success text-light">Medium</span>

                                                    <h5 class="mt-2 mb-2">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body"><?php echo $dato['nombre']; ?></a>
                                                    </h5>

                                                    <p class="mb-0">
                                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                                            Hyper
                                                        </span>
                                                        <span class="text-nowrap mb-2 d-inline-block">
                                                            <i class="uil uil-user"></i>
                                                            <b>0</b> Estudiantes
                                                        </span>
                                                    </p>

                                                    <div class="dropdown float-end">
                                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                                            <!-- item-->
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                                        </div>
                                                    </div>

                                                    <p class="mb-0">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="user-img" class="avatar-xs rounded-circle me-1">
                                                        <span class="align-middle">Sean White</span>
                                                    </p>
                                                </div> <!-- end card-body -->
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/main.js"></script>

