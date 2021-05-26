<?php

session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: ../login.php");
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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #E51636;" id="accordionSidebar" data-aos="fade-right">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon">
                    <img class="img-fluid" src="img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">Employee Site</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fa fa-star"></i>
                    <span>Yay!Center</span></a>
            </li>


            <!-- Heading -->
            <div class="sidebar-heading">
                Edit Option
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
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
                        <div class="alert clearfix" data-aos="fade-up">
                            <a type="button" class="btn btn-success btn-lg" href="add.php">
                                &#x2b; Menu
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" data-aos="fade-up">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Gambar </th>
                                            <th> Nama </th>
                                            <th> Harga </th>
                                            <th> Kategori </th>
                                            <th> Deskripsi </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once "../koneksi.php";
                                        $index = 1;
                                        $query = "SELECT * FROM menu";
                                        $result = $conn->query($query);
                                        while ($line = $result->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?= $index ?></td>
                                                <td><img src='img/<?= $line['Gambar'] ?>'></td>
                                                <td><?= $line['NamaMenu'] ?></td>
                                                <td><?= $line['Harga'] ?></td>
                                                <td><?= $line['Kategori'] ?></td>
                                                <td><?= $line['Deskripsi'] ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?= $line['ID'] ?>" class="btn btn-warning btn-circle btn-sm" role="button">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="delete.php?id=<?= $line['ID'] ?>" class="btn btn-danger btn-circle btn-sm" role="button">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                            $index++;
                                        }
                                        mysqli_free_result($result);
                                        mysqli_close($conn);
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th> # </th>
                                            <th> Gambar </th>
                                            <th> Nama </th>
                                            <th> Harga </th>
                                            <th> Kategori </th>
                                            <th> Deskripsi </th>
                                            <th> Action </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Page Heading -->
                </div>
                <!-- /.container-fluid -->

                <?php
                include 'templates/admin_footer.php';
                ?>
                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script>
                    AOS.init();
                </script>