<?php
include 'templates/auth_header.php'
?>

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="regis-check.php" class="user" method="post" autocomplete="off">
                            <?php if (isset($_GET['taken'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    This email already registered!
                                </div>
                            <?php } ?>
                            <?php if (isset($_GET['notmatch'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    Password does not match!
                                </div>
                            <?php } ?>

                            <!-- Name -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <?php if (isset($_GET['FirstName'])) { ?>
                                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" maxlength="30" value="<?php echo $_GET['First Name']; ?>" required>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" maxlength="30" required>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php if (isset($_GET['LastName'])) { ?>
                                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" maxlength="30" value="<?php echo $_GET['LastName']; ?>" required>
                                    <?php } else { ?>
                                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" maxlength="30" required>
                                    <?php } ?>
                                </div>
                            </div>

                            <!-- Birth Date -->
                            <div class="form-group">
                            
                                <div class="text-center"><label for="BirthDate" style="text-align: center;">Birth Date</label></div>
                                
                                <?php if (isset($_GET['BirthDate'])) { ?>
                                    <input type="date" class="form-control" id="BirthDate" name="BirthDate" placeholder="BirthDate" value="<?php echo $_GET['BirthName']; ?>" required>
                                <?php } else { ?>
                                    <input type="date" class="form-control" id="BirthDate" name="BirthDate" placeholder="BirthDate" required>
                                <?php } ?>
                            </div>

                            <!-- Gender -->
                            <div class="form-group">
                                <select class="form-control" id="Gender" name="Gender" required>
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <?php if (isset($_GET['Email'])) { ?>
                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" maxlength="50" value="<?php echo $_GET['Email']; ?>" required>
                                <?php } else { ?>
                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" maxlength="50" required>
                                <?php } ?>
                            </div>

                            <!-- Password -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1" maxlength="30" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2" maxlength="30" placeholder="Repeat Password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="login.php">Already have an account? Login!</a>

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