<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="<?= base_url('/vendor/datatables/dataTables.bootstrap4.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min.css'); ?>">
     <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min'); ?>">
        <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">

        <!-- Custom fonts for this template-->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="<?= base_url('/assets/css/sb-admin-2.min.css'); ?>">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard/">
            <div class="sidebar-brand-icon rotate-n-15">
                <!-- <i class="fas fa-laugh-wink"></i> -->
            </div>
            <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
                    <a class="nav-link" href="/admin/dashboard/">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Sales Performance</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                
                </div>

                <!-- Nav Item - Utilities Collapse Menu -->
                
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard/categories" >
                <i class=" fas fa-solid fa-layer-group"></i>
                    <span>Categories Management</span>
                </a>
                
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin/dashboard/product" >
                <i class=" fas fa-fw fa-shopping-bag"></i>
                    <span>Product Management</span>
                </a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin/dashboard/orders" >
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Order Management</span>
                </a>
                
            </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
   
    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Nav Item - Charts -->
    

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/AdminSide/dashboard/tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Client Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
   
    <!-- Sidebar Message -->
   

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
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
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                   
                </li>

                <!-- Nav Item - Alerts -->
                
                    <!-- Dropdown - Alerts -->
                    

                <!-- Nav Item - Messages -->
                
                    <!-- Dropdown - Messages -->
                    
                

                <!-- LOGOUT -->
                <button type="button" class="btn btn-danger">Logout</button>
        </nav>
                <?= $this->renderSection('content') ?>



                <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Jorgao 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

    <!-- Bootstrap core JavaScript-->
 
    <script src="<?= base_url('/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=  base_url('/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=  base_url('/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->

    <script src="<?=  base_url('/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
  
    <script src="<?= base_url('/js/demo/chart-area-demo.js'); ?>"></script>
   <script src="<?= base_url('/js/demo/chart-pie-demo.js'); ?>"></script>


   <script src="<?php echo base_url('/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('/vendor/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('/js/demo/datatables-demo.js');?>"></script>

</body>

</html>