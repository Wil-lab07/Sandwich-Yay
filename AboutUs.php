<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About The Maker</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="AboutUs2.css">
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


  <div class="container">
    <h1 class="heading" data-aos="fade-left" style="text-align: center;">Meet The Team</h1>

    <div class="profiles">

      <div class="profile" data-aos="fade-left">
        <img src="img/BryanKenneth.jpg" class="profile-img">

        <h3 class="user-name">Bryan Kenneth</h3>
        <h5>00000034835</h5>
        <div class="iconsosmed">
          <a href="https://www.instagram.com/bkenneth39/" style="text-decoration: none; color:white;" target="blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/bryankenneth/" style="text-decoration: none; color:white;" target="blank"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="profile" data-aos="fade-left">
        <img src="img/WilliamChandra.jpg" class="profile-img">

        <h3 class="user-name">William Chandra</h3>
        <h5>00000034995</h5>
        <div class="iconsosmed">
          <a href="https://www.instagram.com/willy_c8/" style="text-decoration: none; color:white;" target="blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/bryankenneth/" style="text-decoration: none; color:white;" target="blank"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="profile" data-aos="fade-left">
        <img src="img/FelixFerdinand.jpg" class="profile-img">

        <h3 class="user-name">Felix Ferdinand</h3>
        <h5>00000035927</h5>
        <div class="iconsosmed">
          <a href="https://www.instagram.com/felferdinand/" style="text-decoration: none; color:white;" target="blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/felix-ferdinand-1394b9180/" style="text-decoration: none; color:white;" target="blank"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
  <script src="AboutUs.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>