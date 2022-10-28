<?php
                                                foreach ($datos as $dato) {
                                                ?>
                                                    <div class="tasks border p-1 ">

                                                        <div id="task-list-two" class="task-list-items">

                                                            <!-- Task Item -->
                                                            <div class="card mb-0">
                                                                <div class="card-body p-2 ">
                                                                    <small class="float-end text-muted">Fecha:<?php echo $dato['fecha']; ?></small>

                                                                    <h5 class="mt-2 mb-2">
                                                                        <a href="listas?lista=<?php echo $dato['id']; ?>" class="text-primary"><?php echo ucwords(strtolower($dato['nombre'])); ?></a>
                                                                    </h5>

                                                                    <p class="mb-0">
                                                                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                                                            <i class="mdi mdi-briefcase-outline text-muted"></i>
                                                                            Hyper
                                                                        </span>
                                                                        <span class="text-nowrap mb-2 d-inline-block">
                                                                            <i class="uil uil-user"></i>
                                                                            <b>
                                                                                <?php
                                                                                $cantidad = 'SELECT * from estudiantes WHERE id_lista = ? ';
                                                                                $sentenciacantidad = $mbd->prepare($cantidad);
                                                                                $sentenciacantidad->bindParam(1, $dato['id']);
                                                                                $sentenciacantidad->execute();
                                                                                $filascantidad = $sentenciacantidad->rowCount();
                                                                                echo $filascantidad;
                                                                                // var_dump($resultadocantidad);
                                                                                ?>
                                                                            </b> Estudiantes
                                                                        </span>
                                                                    </p>

                                                                    <div class="dropdown float-end">
                                                                        <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="mdi mdi-dots-vertical font-18"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-end bg-dark">
                                                                            <!-- item-->
                                                                            <a href="javascript:void(0);" class="dropdown-item text-success"><i class="mdi mdi-pencil me-1"></i>Calificar</a>
                                                                            <!-- item-->
                                                                            <a href="javascript:void(0);" class="dropdown-item text-info"><i class="mdi mdi-pencil me-1"></i>Editar</a>
                                                                            <!-- item-->
                                                                            <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-delete me-1"></i>Borrar</a>

                                                                        </div>
                                                                    </div>

                                                                    <p class="mb-0">
                                                                        <span class="align-middle">Semestre: <?php echo $dato['semestre']; ?></span>
                                                                    </p>
                                                                </div> <!-- end card-body -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                } ?>