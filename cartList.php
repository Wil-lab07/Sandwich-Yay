<?php

session_start();

// REMOVE FROM CART

if (isset($_GET["action"])) {

    if ($_GET["action"] == "delete") {

        foreach ($_SESSION["shopping_cart"] as $key => $value) {

            if ($_GET["id"] === $value["item_id"]) {

                unset($_SESSION["shopping_cart"][$key]);

                echo '<script>alert("Item Removed")</script>';
            }
        }
    }

    if (count($_SESSION["shopping_cart"]) === 0) {

        header("Location: menu.php");
    }
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
    <link rel="stylesheet" href="cartList.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>

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
            <a href="">About Us</a>
        </div>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </navbar>

    <section id="tables" class="tables">
        <div class>
            <div class="table-responsive-md col-md">
                <table class="table table-hover" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($_SESSION["shopping_cart"])) : $total = 0 ?>
                            <?php foreach ($_SESSION["shopping_cart"] as $keys => $values) : ?>
                                <tr>
                                    <td><?= $keys + 1 ?></td>
                                    <td><?= $values["item_name"]; ?></td>
                                    <td><?= $values["item_quantity"]; ?></td>
                                    <td>Rp <?= number_format($values["item_price"], 2); ?></td>
                                    <td>Rp <?= number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                    <td><a class="btn btn-danger" href="cartList.php?action=delete&id=<?= $values["item_id"] ?>">Remove</a></td>
                                </tr>
                                <?php $total = $total + ($values["item_quantity"] * $values["item_price"]) ?>

                            <?php endforeach; ?>

                            <tr>
                                <td>Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rp <?= number_format($total, 2) ?></td>
                                <td><a href="insert.php?action=insert" class="btn btn-success">Check Out</a></td>
                            </tr>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="cartList.js"></script>
</body>

</html>