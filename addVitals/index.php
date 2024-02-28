<?php
    session_start();

    $pageTitle = "Add Vitals";

?>

<!DOCTYPE html>
<html lang="en">
<?php  
include("../partials/head.php") ;
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php  
include("../partials/sidebar.php") ;
?>
      <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <?php  
include("../partials/search.php") ;
?>
        <!-- Topbar Navbar -->
        <?php  
include("../partials/navbar.php") ;
?>
       
    </nav>
    <div class="col-lg-7 mx-auto mb-4">
    <div class="card border-primary shadow h-100 py-2">
        <div class="card-body">
            <h2 class="text-2xl font-semibold mb-4">Clinical Data</h2>
            <form action="add_vitals_func.php" method="POST">

                <div class="form-group">
                    <label for="upperBloodPressure" class="block text-gray-600">Blood Pressure <span class="text-gray-500">*</span> <span class="text-xs text-gray-500">Upper</span></label>
                    <input type="number" step=".1" id="upperBloodPressure" name="upperBloodPressure" class="form-control form-control-user mt-1" required>
                </div>

                <div class="form-group">
                    <label for="lowerBloodPressure" class="block text-gray-600">Blood Pressure <span class="text-gray-500">*</span> <span class="text-xs text-gray-500">Lower</span></label>
                    <input type="number" step=".1" id="lowerBloodPressure" name="lowerBloodPressure" class="form-control form-control-user mt-1" required>
                </div>

                <div class="form-group">
                    <label for="temperature" class="block text-gray-600">Temperature <span class="text-gray-500">*</span> <span class="text-xs text-gray-500">°C</span></label>
                    <input type="number" step=".1" id="temperature" name="temperature" class="form-control form-control-user mt-1" required>
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

</div>
</div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


</body>
</html>