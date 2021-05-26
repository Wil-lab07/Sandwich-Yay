<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandwich Yay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="homes.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
            <a href="trackorder.php">Track</a>
            <a href="AboutUs.php">About Us</a>
        </div>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </navbar>

    <section class="carousel" id="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/homepage1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/homepage2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/homepage3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="navigation" id="navigation">
        <div class="row mb-4 navigations mt-5">

            <div class="navCard menu mb-4" data-aos="fade-right">
                <a href="menu.php" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Menu </h3>
                            <p class="text-justify">Buy our best products, such as our beautiful and super duper delicious chicken sandwich</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="navCard TrakOrder mb-4" style="background-image: url('https://images.squarespace-cdn.com/content/v1/5d1ce4b7d329a40001804392/1563741666719-0GUP1PFQNCZ3LYRDXW7Z/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/Delivery.jpg'); background-size: cover;" data-aos="fade-right">
                <a href="trackorder.php" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> Track Order </h3>
                            <p class="text-justify">Feeling Hungry? Track your order now!</p>
                        </div>
                    </div>
                </a>
            </div>

            <?php if (!isset($_SESSION["login"])) : ?>
                <div class="navCard signIn mb-4" data-aos="fade-right">
                    <a href="UTS_2/login.php" style="text-decoration: none; color: black;">
                        <div class="property-card">
                            <div class="property-description">
                                <h3 class="text-center"> Sign In </h3>
                                <p class="text-justify">Start your order by signing in!</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php else : ?>
                <div class="navCard logOut mb-4" data-aos="fade-right">
                    <a href="UTS_2/logout.php" style="text-decoration: none; color: black;">
                        <div class="property-card">
                            <div class="property-description">
                                <h3 class="text-center"> Log Out </h3>
                                <p class="text-justify">Whoops! Don't forget to log out and come back again!</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

            <div class="navCard aboutUs mb-4" data-aos="fade-right">
                <a href="menu.php" style="text-decoration: none; color: black;">
                    <div class="property-card">
                        <div class="property-description">
                            <h3 class="text-center"> About Us </h3>
                            <p class="text-justify">Find out more about us</p>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="homes.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</html>