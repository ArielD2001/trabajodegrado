<?php include('config/validatesesion.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include "config/config-header.php" ?>
    <title>Promocion y prevencion</title>
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="wrapper">

        <!-- ========== sidebar =========-->
        <?php include "templates/plantilla-sidebar.php"; ?>
        <!-- ========= end sidebar ========= -->



        <div class="content-page">

            <!-- ========= header ========= -->
            <?php include "templates/plantilla-header.php"; ?>
            <!-- ========= end header ========= -->




            <!-- ========= contenido ========= -->
            <div class="content">
                <div class="contenedor">
                    <h3>Promocion y prevencion</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <table class="table table-striped table-centered mb-0">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>No Identidad</th>
            <th>Fecha</th>
            <th>Ultima actualizacion</th>
            <th>Definitiva</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="table-user">
                <img src="../assets/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle" />
                Risa D. Pearson
            </td>
            <td>AC336 508 2157</td>
            <td>July 24, 1950</td>
            <td>01/01/2022</td>
            <td class="text-success text-center">5.0</td>

            <td class="table-action">
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>
        <tr>
            <td class="table-user">
                <img src="../assets/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle" />
                Ann C. Thompson
            </td>
            <td>SB646 473 2057</td>
            <td>January 25, 1959</td>
            <td>01/01/2022</td>
            <td class="text-success text-center">4.0</td>

            <td class="table-action">
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>
        <tr>
            <td class="table-user">
                <img src="../assets/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle" />
                Paul J. Friend
            </td>
            <td>DL281 308 0793</td>
            <td>September 1, 1939</td>
            <td>01/01/2022</td>
            <td class="text-warning text-center">3.5</td>


            <td class="table-action">
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>
        <tr>
            <td class="table-user">
                <img src="../assets/images/users/avatar-1.jpg" alt="table-user" class="me-2 rounded-circle" />
                Sean C. Nguyen
            </td>
            <td>CA269 714 6825</td>
            <td>February 5, 1994</td>
            <td>01/01/2022</td>
            <td class="text-danger text-center">2.0</td>


            <td class="table-action">
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>
    </tbody>
</table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========= end contenido ========= -->


        </div>

        <!-- ========= aside ========= -->
        <?php include "templates/plantilla-aside.php"; ?>
        <!-- ========= end aside ========= -->

        <!-- ========= footer =========-->
        <?php include "templates/plantilla-footer.php"; ?>
        <!-- ========= end footer ========= -->
    </div>
    <?php include "config/config-footer.php" ?>
</body>

</html>