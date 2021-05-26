<?php
session_start();
require 'function.php';

$id = $_GET["id"];

$menu = query("SELECT * FROM menu WHERE ID = $id")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "
				<script>
					document.location.href = 'admin.php';
				</script>
			";
    } else {
        echo "
				<script>
					document.location.href = 'admin.php';
				</script>
			";
    }
}

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
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #E51636;" id="accordionSidebar">

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
            <div id="content" class="content">

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

                                Welcome, <?php echo $_SESSION["name"]; ?>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <form class="p-3" method="post" action="" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $menu["ID"]; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $menu["Gambar"]; ?>">
                            <div class="mb-3">
                                <label for="NamaMenu">Nama Menu</label>
                                <input type="text" class="form-control" id="NamaMenu" name="NamaMenu" maxlength="30" placeholder="Nama Menu" required value="<?= $menu["NamaMenu"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Harga">Harga</label>
                                <input type="number" class="form-control" id="Harga" name="Harga" maxlength="20" placeholder="Harga" required value="<?= $menu["Harga"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Kategori">Kategori</label>
                                <select name="Kategori" id="Kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Breakfast">Breakfast</option>
                                    <option value="Entrees">Entrees</option>
                                    <option value="Salads">Salads</option>
                                    <option value="Sides">Sides</option>
                                    <option value="Kid's Meals">Kid's Meals</option>
                                    <option value="Treats">Treats</option>
                                    <option value="Drinks">Drinks</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" maxlength="100" placeholder="Deskripsi" required value="<?= $menu["Deskripsi"]; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Gambar">Gambar</label> <br>
                                <img src="img/<?= $menu["Gambar"]; ?>">
                                <input type="file" class="form-control-file" id="Gambar" name="Gambar" accept="image/jpeg">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary"> Edit </button>
                            <a href="admin.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                    <!-- Page Heading -->
                </div>
                <!-- /.container-fluid -->

                <?php
                include 'templates/admin_footer.php';
                ?>