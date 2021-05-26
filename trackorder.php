<?php
session_start();
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Site Login</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="trackorder2.css" rel="stylesheet">

</head>

<body class="bgorder">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bgimage"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <a href="index.php"><img src="img/logo2.png" class="imageorder"></a>
                                        <h1 class="h4 text-gray-900 mb-4">Track Your Order!</h1>
                                        <p>Press logo to go back to home</p>
                                    </div>

                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="token" aria-describedby="emailHelp" placeholder="Input Order Token" name="token">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger buttonlogin" name="track" value="Track">
                                        </div>
                                    </form>
                                    <?php
                                    $ambil = 0;
                                    if (isset($_POST["track"])) {
                                        $token = $_POST["token"];
                                        $query = "SELECT * from orders where Token = '$token'";
                                        $result = query($query);

                                        if ($result == null) {
                                            echo "Input invalid";
                                        } else
                                            $ambil = 1;
                                        for ($i = 0; $i < count($result); $i++) {

                                            if ($result[$i]["Status"] == "Not Done") {
                                                $ambil = 0;
                                                echo "Order anda belum diproses";
                                                break;
                                            } else if ($result[$i]["Status"] == "On Process") {
                                                $ambil = 1;
                                            } else {
                                                $ambil = 2;
                                            }
                                        }

                                        if ($ambil == 1) {
                                            echo "Order anda sedang diproses";
                                        } else if ($ambil == 2) {
                                            echo "Order anda siap untuk diambil";
                                        } else {
                                        }
                                        echo "<br><a href='index.php' style = 'color: red;'>Kembali ke home</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>