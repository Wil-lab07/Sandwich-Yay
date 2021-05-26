<?php 

session_start();
if(!isset($_SESSION["admin"])){
    header("Location: ../login.php");
}

require "function.php";
$querytotal = "SELECT sum(Total) FROM orders";
$result = query($querytotal);


$querypesanan = "SELECT count(Token) FROM orders";
$resultpesanan = query($querypesanan);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #E51636;" id="accordionSidebar" data-aos="fade-right" data-aos-duration='4000'>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon">
                    <img class="img-fluid" src="img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">Employee Site</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fa fa-star"></i>
                    <span>Yay!Center</span></a>
            </li>


            <!-- Heading -->
            <div class="sidebar-heading">
                Edit Option
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="menu.php">
                    <i class="fas fa-book"></i>
                    <span>Menu</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <span>List User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="order.php">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <span>Orders</span></a>
            </li>

            <!-- Divider Logout -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="../logout.php">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content"class="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block" style="color: black;"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                <!-- nama user -->
                                
                                Welcome, <?php echo $_SESSION["name"];?>
                                <!-- <img class="img-profile rounded-circle"
                                    src=""> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                
                                
                                <!-- logout -->
                                <a class="dropdown-item" href="../logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

<div class="container-fluid" data-aos="fade-up" data-aos-duration="4000">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-900">Have a Nice Day!</h1>
            
            </div>
</div>

<div class="row row-cols-2 baris" data-aos="fade-up" data-aos-duration="6000">
<!-- Earnings (Annual) Card Example -->
<div class="col-xl-6 col-md-6 mb-4 kartu">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pendapatan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?php echo $result[0]["sum(Total)"];?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
            </div>
        </div>
    </div>
</div>



<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pesanan Belum Selesai
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $resultpesanan[0]["count(Token)"];?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
                    
</div>

<section class="navigation" id="navigation">
    <div class="row mb-4 navigations mt-5">
            
            <div class="navCard menu mb-4 md-12" data-aos="fade-up" data-aos-duration="4000">
                <a href="menu.php" style = "text-decoration: none; color: black;">
                    <div class="property-card">                       
                        <div class="property-description">
                            <h1 class = "text-center"> Edit Menu </h1>
    
                        </div>
                    </div>
                </a>
            </div>        

            <div class="navCard signIn mb-4 md-12" data-aos="fade-up">
                <a href="order.php" style = "text-decoration: none; color: black;">
                    <div class="property-card">                       
                        <div class="property-description">
                            <h1 class = "text-center"> Complete Delivery </h3>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="navCard aboutUs mb-4 md-12" data-aos="fade-up">
                <a href="cetak.php" style = "text-decoration: none; color: black;" target="_blank">
                    <div class="property-card">                       
                        <div class="property-description">
                            <h1 class = "text-center"> Generate Report </h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    </div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sandwich Yay 2021</span>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <!-- logout -->
                <a class="btn btn-primary" href="">Logout</a>
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
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>