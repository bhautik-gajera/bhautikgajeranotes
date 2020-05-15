<?php
include('include/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="loginstyle/images/icons/favicon.ico"/>

    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="loginstyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="loginstyle/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/animate/animate.css">
  
    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/select2/select2.min.css">
  
    <link rel="stylesheet" type="text/css" href="loginstyle/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="loginstyle/css/util.css">
    <link rel="stylesheet" type="text/css" href="loginstyle/css/main.css">

</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="logincheck.php" method="POST">
                    <span class="login100-form-title p-b-26">
                        Bhautik Gajera Notes Administration
                    </span>
                    <div class="row justify-content-center">
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        }
                        ?>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="login">
                                Login
                            </button>
                        </div>
                    </div>
                    <!-- <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" onclick="document.location = 'signup.php'">SignUp</button>
                            <a href="signup.php"></a>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    

    <script src="loginstyle/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="loginstyle/vendor/animsition/js/animsition.min.js"></script>

    <script src="loginstyle/vendor/bootstrap/js/popper.js"></script>
    <script src="loginstyle/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="loginstyle/vendor/select2/select2.min.js"></script>

    <script src="loginstyle/vendor/daterangepicker/moment.min.js"></script>
    <script src="loginstyle/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="loginstyle/vendor/countdowntime/countdowntime.js"></script>

    <script src="loginstyle/js/main.js"></script>

</body>
</html>




