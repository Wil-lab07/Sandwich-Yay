<?php
session_start();


require 'functions.php';

$initiating = false;

if (isset($_GET["kategori"])) {
    $kategori = $_GET["kategori"];
    $query = "SELECT * FROM menu WHERE Kategori = '$kategori'";
    $menu = query($query);

    $initiating = true;
}




// ADD TO CART //

if (isset($_POST["addCart"])) {

    if (isset($_SESSION["shopping_cart"])) {

        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

        /*
            
                item_array_id = [
                    1,
                    2,
                    3,
                ]

            */

        if (!in_array($_POST["menu_id"], $item_array_id)) {

            $count = count($_SESSION["shopping_cart"]);
            // 1 ==> index selanjutnya array 0 

            $item_array = [
                "item_id" => $_POST["menu_id"],
                "item_name" => $_POST["menu_name"],
                "item_quantity" => intval($_POST["menu_quantity"]),
                "item_price" => intval($_POST["menu_price"]),
            ];

            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="menu.php"</script>';
        }
    } else {
        $item_array = [
            "item_id" => $_POST["menu_id"],
            "item_name" => $_POST["menu_name"],
            "item_quantity" => intval($_POST["menu_quantity"]),
            "item_price" => intval($_POST["menu_price"]),
        ];

        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if (isset($_POST["detail"])) {
    $id = $_POST["id"];
    $query = "SELECT * from menu where ID = $id";
    $result = query($query);
    $_SESSION["MenuDesc"] = $result;
}

if (isset($_POST["unset"])) {
    unset($_SESSION['MenuDesc']);
}

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandwich Yay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="menus.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <!-- Navigation Bar -->
    <navbar class="navbar" id="navbar">
        <img src="img/logo2.png" class="logo red" alt="">
        <img src="img/logo.png" class="logo white" alt="">

        <div class="session" style="display: flex;">
            <?php if (isset($_SESSION["shopping_cart"])) : ?>
                <?php if (count($_SESSION["shopping_cart"]) > 0) : ?>
                    <div class="notification">
                        <a href="cartList.php">Cart</a>
                        <a href="cartlist.php"><?php echo count($_SESSION["shopping_cart"]) ?></a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (isset($_SESSION["login"])) : ?>
                <div class="userAccount">
                    <a><?= $_SESSION["name"] ?></a>
                </div>
            <?php endif; ?>
        </div>

        <div class="links">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <?php if (isset($_SESSION["login"])) : ?>
                <a href="UTS_2/logout.php">Log Out</a>
            <?php else : ?>
                <a href="UTS_2/login.php">Sign In</a>
            <?php endif ?>
            <a href="trackorder.php">Track</a>
            <a href="AboutUs.php">About Us</a>
        </div>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </navbar>
    <!-- End of Navigation -->



    <!-- Title -->
    <section id="title" style="margin-top: 20px;" class="title">
        <h1 data-aos="fade-left" data-aos-delay="100">Enjoy</h1>
        <h1 data-aos="fade-left" data-aos-delay="300">Our</h1>
        <h1 data-aos="fade-left" data-aos-delay="500">#1</h1>
        <h1 data-aos="fade-left" data-aos-delay="700">Chicken</h1>
        <h1 data-aos="fade-left" data-aos-delay="900">Sandwich</h1>
    </section>
    <!-- End of TItle -->





    <!-- Categories -->
    <section class="categories" id="categories">

        <div class="row title">
            <h1 class="text-center">Maybe if you're interested in anything else...</h1>
        </div>

    </section>

    <section class="navigation" id="navigation">

        <div class="row navigations">
            <div class="navCard Breakfast mb-4" data-aos="fade-right">
                <a href="menu.php?kategori=Breakfast #menu" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Breakfast </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="navCard Entrees mb-4" data-aos="fade-right">
                <a href="menu.php?kategori=Entrees #menu" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Entrees </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="navCard Salads mb-4" data-aos="fade-right">
                <a href="menu.php?kategori=Salads #menu" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Salads </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="navCard Sides mb-4" data-aos="fade-right">
                <a href="menu.php?kategori=Sides #menu" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Sides </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="navCard Treats mb-4" data-aos="fade-right">
                <a href="menu.php?kategori=Treats #menu" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Treats </h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="navCard Drinks mb-4" data-aos="fade-right">
                <a href="menu.php?kategori=Drinks #menu" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Drinks </h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </section>
    <!-- End of Categories -->





    <!-- Menu -->
    <?php if ($initiating === true) : ?>

        <section class="menu" id="menu">

            <div class="row">
                <div class="col">
                    <h1 style="color: #E51636;" class="text-center"><?= $_GET["kategori"]; ?></h1>
                </div>
            </div>

            <div class="container">

                <div class="row">

                    <?php if (isset($_SESSION["shopping_cart"])) : $collectID = array_column($_SESSION["shopping_cart"], "item_id"); ?>

                        <?php foreach ($menu as $key => $value) : ?>

                            <?php if (in_array($value["ID"], $collectID)) : ?>

                                <div class="col-md mb-4 mt-4">

                                    <div class="card" style="width: 20rem;">

                                        <img src="img/<?= $value["Gambar"] ?>" class="card-img-top" alt="...">

                                        <form action="" method="post">
                                            <input type="hidden" value=<?= $value['ID'] ?> name="id">
                                            <input type="submit" class="btn btn-warning" name="detail" value="Details">
                                        </form>

                                        <div class="card-body">

                                            <form action="" method="post">

                                                <h2><?= $value["NamaMenu"]; ?></h2>

                                                <div class="integer">
                                                    <p class="card-text">Rp <?= number_format($value["Harga"], 2) ?></p>
                                                    <input style="width: 50px;" type="number" name="menu_quantity" value="1" min=1>
                                                </div>

                                                <input type="hidden" name="menu_name" value="<?= $value["NamaMenu"] ?>">
                                                <input type="hidden" name="menu_description" value="<?= $value["Deskripsi"] ?>">
                                                <input type="hidden" name="menu_price" value="<?= $value["Harga"] ?>">

                                                <input type="hidden" name="menu_id" value="<?= $value["ID"] ?>">

                                                <?php if (isset($_SESSION["login"])) : ?>

                                                    <input disabled style="width: 100%;" type="submit" class="btn btn-success" name="addCart" value="It's Been Added">

                                                <?php else : ?>

                                                    <input disabled style="width: 100%;" type="submit" class="btn btn-danger" name="addCart" value="You have to login">

                                                <?php endif; ?>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            <?php else : ?>

                                <div class="col-md mb-4 mt-4">

                                    <div class="card" style="width: 20rem;">

                                        <img src="img/<?= $value["Gambar"] ?>" class="card-img-top" alt="...">

                                        <form action="" method="post">
                                            <input type="hidden" value=<?= $value['ID'] ?> name="id">
                                            <input type="submit" class="btn btn-warning" name="detail" value="Details">
                                        </form>
                                        <div class="card-body">

                                            <form action="" method="post">

                                                <h2><?= $value["NamaMenu"]; ?></h2>

                                                <div class="integer">
                                                    <p class="card-text">Rp <?= number_format($value["Harga"], 2) ?></p>
                                                    <input style="width: 50px;" type="number" name="menu_quantity" value="1" min=1>
                                                </div>

                                                <input type="hidden" name="menu_name" value="<?= $value["NamaMenu"] ?>">
                                                <input type="hidden" name="menu_description" value="<?= $value["Deskripsi"] ?>">
                                                <input type="hidden" name="menu_price" value="<?= $value["Harga"] ?>">

                                                <input type="hidden" name="menu_id" value="<?= $value["ID"] ?>">

                                                <?php if (isset($_SESSION["login"])) : ?>

                                                    <input style="width: 100%;" type="submit" class="btn btn-primary" name="addCart" value="Add to Cart">

                                                <?php else : ?>

                                                    <input disabled style="width: 100%;" type="submit" class="btn btn-danger" name="addCart" value="You have to login">

                                                <?php endif; ?>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            <?php endif; ?>

                        <?php endforeach; ?>

                    <?php else : ?>

                        <?php foreach ($menu as $key => $value) : ?>

                            <div class="col-md mb-4 mt-4">

                                <div class="card" style="width: 20rem;">

                                    <img src="img/<?= $value["Gambar"] ?>" class="card-img-top" alt="...">

                                    <form action="" method="post">
                                        <input type="hidden" value=<?= $value['ID'] ?> name="id">
                                        <input type="submit" class="btn btn-warning" name="detail" value="Details">
                                    </form>
                                    <div class="card-body">

                                        <form action="" method="post">

                                            <h2><?= $value["NamaMenu"]; ?></h2>

                                            <div class="integer">
                                                <p class="card-text">Rp <?= number_format($value["Harga"], 2) ?></p>
                                                <input style="width: 50px;" type="number" name="menu_quantity" value="1" min=1>
                                            </div>

                                            <input type="hidden" name="menu_name" value="<?= $value["NamaMenu"] ?>">
                                            <input type="hidden" name="menu_description" value="<?= $value["Deskripsi"] ?>">

                                            <input type="hidden" name="menu_price" value="<?= $value["Harga"] ?>">

                                            <input type="hidden" name="menu_id" value="<?= $value["ID"] ?>">

                                            <?php if (isset($_SESSION["login"])) : ?>

                                                <input style="width: 100%;" type="submit" class="btn btn-primary" name="addCart" value="Add to Cart">

                                            <?php else : ?>

                                                <input disabled style="width: 100%;" type="submit" class="btn btn-danger" name="addCart" value="You have to login">

                                            <?php endif; ?>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    <?php endif; ?>
                </div>

            </div>

        </section>

    <?php endif; ?>
    <!-- End of Menu -->

    <!-- Modal -->
    <?php if (isset($_SESSION["MenuDesc"])) : ?>
        <div id="detailModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $_SESSION['MenuDesc'][0]['NamaMenu'] ?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="img/<?= $_SESSION['MenuDesc'][0]['Gambar'] ?>" style="width: 250px;height:250px;"></img>
                                </div>
                                <div class="col">
                                    <h3><?= $_SESSION['MenuDesc'][0]['NamaMenu'] ?></h3>
                                    <p><?= $_SESSION['MenuDesc'][0]['Deskripsi'] ?></p>
                                    <p>Rp. <?= number_format($_SESSION['MenuDesc'][0]['Harga']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="" method="post">
                                <div class="row">
                                    <input type="submit" class="btn btn-secondary" value="Close" name="unset" style="width:100px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="menu2.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function() {
            $('#detailModal').modal({
                keyboard: false,
                show: true,
                backdrop: 'static'
            });
        });
    </script>
</body>

</html>