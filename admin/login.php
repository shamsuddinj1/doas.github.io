<?php
include "../connection.php";
session_start();
if (isset($_SESSION['email'])) {
    header("location:dashboard.php");
}
?>
<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/animate.min.css">

<link rel="stylesheet" href="../assets/css/meanmenu.css">

<link rel="stylesheet" href="../assets/css/fontawesome.min.css">

<link rel="stylesheet" href="../assets/css/flaticon.css">

<link rel="stylesheet" href="../assets/css/nice-select.min.css">

<link rel="stylesheet" href="../assets/css/odometer.min.css">

<link rel="stylesheet" href="../assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="../assets/css/responsive.css">
<title>Admin | Log In</title>
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
</head>
<body>

<div class="preloader">
<div class="spinner"></div>
</div>


<header class="header-area">


</header>


<div class="page-title-area item-bg-2">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-title-content">
<h2>Log In</h2>
</div>
</div>
</div>
</div>
</div>


<div class="sign-in-area ptb-100">
<div class="container">
<div class="sign-in-form">
<div class="sign-in-title">
<h3>Welcome Back!</h3>
<p>Please Sign In to your account.</p>
</div>
<form method="POST">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input type="email" class="form-control" placeholder="Email" name="email">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="password" class="form-control" placeholder="Password" name="password">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="checkbox" class="form-check-input" id="checkme">
<label class="form-check-label" for="checkme">Keep me Log In</label>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<a href="single-events.php">Forgot Password?</a>
</div>
</div>
<div class="col-lg-12">
<div class="send-btn">
<input type="submit" name="btn-signin" value="Login In Now" class="default-btn">
</div>
<br>
<span>Don't have account? <a href="sign-up.php">Signup!</a></span>
</div>
</div>
</form>
</div>
</div>
</div>




<div class="copyright-area">
<div class="container">
<p>
Copyright © 2022 Tinzer. All Rights Reserved by Shaista Ali
</p>
</div>
</div>


<div class="go-top">
<i class="fa fa-chevron-up"></i>
<i class="fa fa-chevron-up"></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/js/jquery.min.js"></script>

<script src="../assets/js/popper.min.js"></script>

<script src="../assets/js/bootstrap.min.js"></script>

<script src="../assets/js/jquery.meanmenu.js"></script>

<script src="../assets/js/jquery.nice-select.min.js"></script>

<script src="../assets/js/odometer.min.js"></script>

<script src="../assets/js/jquery.appear.js"></script>

<script src="../assets/js/datepicker.min.js"></script>

<script src="../assets/js/jquery.magnific-popup.min.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/main.js"></script>

<script src="../https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


</html>
<?php
    if (isset($_POST['btn-signin'])) {
       $email = $_POST['email'];
       $password = $_POST['password'];

       $login = mysqli_query($con,"SELECT * FROM registration WHERE email='$email' && password='$password'");
       $check = mysqli_num_rows($login);
       $fetch = mysqli_fetch_array($login);
       if ($check) {
            $_SESSION['email'] = $fetch['email'];
            $_SESSION['username'] = $fetch['username'];
           echo "<script>
                        swal({
                          title: 'Good job!',
                          text: 'You are Logged In Successfully!',
                          icon: 'success',
                        }).then(function() {
                            window.location = 'admin/dashboard.php';
                        });
                    </script>";
       }
       else
       {
        echo "<script>
                        swal({
                          title: 'Sorry!',
                          text: 'Login Failed!',
                          icon: 'error',
                        }).then(function() {
                            window.location = 'admin/login.php';
                        });
                    </script>";
       }
    }
?>