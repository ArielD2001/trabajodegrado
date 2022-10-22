<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CURN" name="description">
    <link rel="shortcut icon" href="../assets/images/logo_sm.png">
    <link href="../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
    <title>Home</title>

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
                    <h3>Home</h3>
                </div>
            </div>
            <!-- ========= end contenido ========= -->


        </div>

        <!-- ========= aside ========= -->
          <?php include "templates/plantilla-aside.php" ;?>
        <!-- ========= end aside ========= -->

        <!-- ========= footer =========-->
          <?php include "templates/plantilla-footer.php" ;?>
        <!-- ========= end footer ========= -->
    </div>


    <!-- bundle -->
    <script src="../assets/js/vendor.min.js"></script>
    <script src="../assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="../assets/js/vendor/apexcharts.min.js"></script>
    <script src="../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="../assets/js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->
</body>
</html>