<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dashboard - Login</title>

        <link rel="shortcut icon" href="../assets/images/Bhagwant Logo PNG.png">
        <link rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
        <div class="main-wrapper login-body">
                <div class="login-wrapper"
                        style="background-image:url(assets/img/videoblocks-plexus-abstract-network-business-technology-science-background-loop_htyhhkyle_thumbnail-1080_01.png)">
                        <div class="container">
                                <div class="loginbox">
                                        <!-- <div class="login-left">

                        <img class="img-fluid" src="../images/logoschool.jpg" alt="Logo">
                    </div> -->
                                        <div class="login-right">

                                                <div class="login-right-wrap">
                                                        <div class="text-center mb-4">
                                                                <img class="img-fluid" src="../assets/images/Bhagwant Logo PNG.png"
                                                                        alt="Logo" width="200">
                                                        </div>
                                                        <h1 style="color:#fff" class="mb-3">Admin Login</h1>
                                                        <!-- <p class="account-subtitle">Access to our dashboard</p> -->
                                                        <form action="login-code.php" method="POST">
                                                                <div class="form-group">
                                                                        <input class="form-control" type="text"
                                                                                name="email" placeholder="Email"
                                                                                required>
                                                                </div>
                                                                <div class="form-group">
                                                                        <input class="form-control" type="password"
                                                                                name="Password" placeholder="Password"
                                                                                required>
                                                                </div>
                                                                <div class="form-group">
                                                                        <button class="btn btn-primary btn-block"
                                                                                type="submit"
                                                                                style="background-color:#000bf299;border-color:#000bf299">Login</button>
                                                                </div>
                                                        </form>
                                                        <!-- <div class="text-center forgotpass "><a href="../forgotpwd.php"
                                                                        class="text-white">Forgot
                                                                        Password?</a></div> -->
                                                        <!-- <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or"></span>
                            </div> -->
                                                        <!--   <div class="social-login">
                                <span>Login with</span>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                            </div> -->
                                                        <!--  <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div> -->
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


        <script src="assets/js/jquery-3.5.1.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <script src="assets/js/script.js"></script>
</body>


</html>