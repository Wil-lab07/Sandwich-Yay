<?php
session_start();
include 'templates/auth_header.php';
if (isset($_SESSION["admin"])) {
    // header("Location: admin/admin.php");
    echo "<script>document.location.href='admin/admin.php'</script>";
    exit;
} else if (isset($_SESSION["name"])) {
    header("Location: ../index.php");
}

?>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                </div>


                                <form class="user" method="POST" action="login-check.php" autocomplete="off">
                                    <?php if (isset($_GET['success'])) { ?>
                                        <div class="alert alert-success" role="alert">
                                            Congratulation! Register Completed!
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET['wrongpass'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            Wrong email or password!
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET['wrongcap'])) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            Wrong captcha!
                                        </div>
                                    <?php } ?>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" maxlength="50" placeholder="Enter Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" maxlength="30" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 mb-2 mb-sm-0">
                                            <img src="captcha.php" class="form-group captcha-image" alt="gambar" /> <i class="fas fa-redo refresh-captcha"></i>
                                            <input class="col-sm-8 mb-sm-0 form-control form-control-user" name="kodecaptcha" placeholder="Input captcha" maxlength="5" required />
                                        </div>
                                    </div>
                                    <script>
                                        var refreshButton = document.querySelector(".refresh-captcha");
                                        refreshButton.onclick = function() {
                                            document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
                                        }
                                    </script>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                            <label class="custom-control-label" for="remember">
                                                Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="registration.php">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="../index.php">Back to Home!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>



<?php
include 'templates/auth_footer.php'
?>
