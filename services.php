<?php 
    include "connection.php";
?>
<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/flaticon.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<title>Tinzer | Services</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<div class="preloader">
<div class="spinner"></div>
</div>


<header class="header-area">
<div class="top-header">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<ul class="top-list">
<li>
<i class='flaticon-clock'></i>
Mon-Fri 09-5PM
</li>
<li>
<i class='flaticon-phone-call'></i>
<a href="tel:+92-(123)-456">Call Us: +92-(123)-456</a>
</li>
<li>
<i class='flaticon-paper-plane'></i>
<a href="alishaista368@gmail.com"><span class="__cf_email__" data-cfemail="123456">[email&#160;protected]</span></a>
</li>
</ul>
</div>
<div class="col-lg-6">
<ul class="top-social">
<li>
<a href="#" class="facebook">
<i class="fab fa-facebook-f"></i>
</a>
</li>
<li>
<a href="#" class="twitter">
<i class="fab fa-twitter"></i>
</a>
</li>
<li>
<a href="#" class="pinterest">
<i class="fab fa-pinterest-p"></i>
</a>
</li>
<li>
<a href="#" class="instagram">
<i class="fab fa-instagram"></i>
</a>
</li>
<li>
<a href="sign-in.php" class="log-in">
Sign In
</a>
 </li>
<li>
<a href="sign-up.php" class="sign-in">
Sign Up
</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="navbar-area navbar-two">
<div class="main-responsive-nav">
<div class="container">
<div class="main-responsive-menu">
<div class="logo">
<a href="index.php">
<img src="assets/img/logo.png" alt="logo">
</a>
</div>
</div>
</div>
</div>
<div class="main-navbar">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.php">
<img src="assets/img/logo.png" alt="logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
<a href="index.php" class="nav-link active">
Home
</a>
</li>
<li class="nav-item">
<a href="about.php" class="nav-link active">
About
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="about.php" class="nav-link">
About
</a>
</li>
<li class="nav-item">
<a href="team.html" class="nav-link">
Our Team
</a>
</li>
<li class="nav-item">
<a href="testimonials.html" class="nav-link">
Testimonials
</a>
</li>
<li class="nav-item">
<a href="how-it-works.html" class="nav-link">
How It Works
</a>
</li>
<li class="nav-item">
<a href="faq.html" class="nav-link">
FAQ
</a>
</li>
</ul>
<li class="nav-item">
<a href="services.php" class="nav-link active">
Services
<i class="fa fa-angle-down"></i>
 </a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="services.php" class="nav-link">
Services
</a>
</li>
<li class="nav-item">
<a href="solution.html" class="nav-link">
Solutions
</a>
<li class="nav-item">
<a href="solution-details.html" class="nav-link">
Solutions Details
</a>
</ul>
</li>
<li class="nav-item">
<a href="shop.html" class="nav-link active">
Shop
<i class="fa fa-angle-down"></i>
 </a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="shop.html" class="nav-link">
Shop
</a>
</li>
<li class="nav-item">
<a href="cart.html" class="nav-link">
Cart
</a>
</li>
<li class="nav-item">
<a href="checkout.html" class="nav-link">
Checkout
</a>
</li>
<li class="nav-item">
<a href="single-product.html" class="nav-link">
Product Details
</a>
</ul>
</li>
<li class="nav-item">
<a href="projects.php" class="nav-link active">
Our Projects
</a>
</li>
<li class="nav-item">
<a href="contact.php" class="nav-link active">
Contact
</a>
</li>
</ul>
<div class="others-options">
<a href="appointment.php" class="default-btn-two">
Make An Appointment
 <span></span>
</a>
</div>
</div>
</nav>
</div>
</div>
</div>

</header>


<div class="page-title-area item-bg-6">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-title-content">
<h2>Services</h2>
<ul>
<li><a href="index.php">Home</a></li>
<li>Services</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="services-section bg-f4f6fe pt-100 pb-100">
<div class="container">
<div class="section-title">
<span>Our Services</span>
<h2>Our Healthcare Services</h2>
<p><b>Below given some of our healthcare services which we will provide you.</b></p>
</div>
<div class="row">
<?php 
    $limit = 3;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }
    $offset = ($page - 1) * $limit;
    $fetch = mysqli_query($con,"SELECT * FROM services ORDER BY id ASC LIMIT {$offset},{$limit}");
    while($row = mysqli_fetch_array($fetch)){
?>
<div class="col-lg-4 col-md-6">
<div class="services-item-two">
<div class="icon">
<i class="flaticon-bacteria"></i>
</div>
<a href="single-services.php?id=<?php echo $row['id']; ?>">
<h3><?php echo $row['title']; ?></h3>
</a>
<p><?php echo $row['description']; ?></p>
<a href="single-services.php?id=<?php echo $row['id']; ?>" class="read-btn">Read More +</a>
</div>
</div>
<?php } ?>
<?php 
    $fetch = mysqli_query($con,"SELECT * FROM services");
    if (mysqli_num_rows($fetch) > 0) {
        $total_records = mysqli_num_rows($fetch);
        $limit = 3;
        $total_pages = ceil($total_records / $limit);
        echo "<div class='col-lg-12 col-md-12'>
                <div class='pagination-area'>";
                if ($page > 1) {
                    echo "<a href='services.php?page=".($page-1)."' class='prev page-numbers'>";
                    echo "<i class='fa fa-chevron-left'></i>";
                    echo "</a>";
                }
        for ($i=1; $i <= $total_pages ; $i++) { 
            
            echo "<a href='services.php?page=$i' class='page-numbers'>$i</a>";
        }
        if ($total_pages > $page) {
                    echo "<a href='services.php?page=".($page+1)."' class='next page-numbers'>";
                    echo "<i class='fa fa-chevron-right'></i>";
                    echo "</a>";
                }
        echo "</div>
            </div>";
    }
?>

</div>
</div>
</section>


<section class="step-three ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="step-three-image">
<img src="assets/img/step-three-image.png" alt="image">
</div>
</div>
<div class="col-lg-6">
<div class="step-three-content">
<span>Step 3</span>
<h3>Pick Up Your Prescription from Your Local Doctor.</h3>
<p>Many healthcare systems around the world together with government agencies and startup companies are building and delivering Telehealth</p>
<b>We can send your prescription directly to your local pharmacy for easy pick-up. Many healthcare systems around the world together with government agencies and startup companies are building and delivering Telehealth</b>
<div class="step-btn">
<a href="appointment.php" class="default-btn">
Make Appointment
<span></span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="appointment-area ptb-100">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="2700">00</span>
<span class="sign-icon">+</span>
</h3>
<p>Care Locations</p>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="2.7">00</span>
<span class="sign-icon">K</span>
</h3>
<p>Virtual Care Solutions</p>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="99.60">00</span>
<span class="sign-icon">%</span>
</h3>
<p>Connections Success Rate</p>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="30">00</span>
<span class="sign-icon">+</span>
</h3>
<p>Award Winning</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="appointment-form">
<div class="content">
<span>Call to Action</span>
<h3>Make An Appointment</h3>
</div>
<form method="POST">
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="Name" name="username" placeholder="Enter Your UserName">
<i class="flaticon-user"></i>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="Email" name="email" placeholder="Enter Email">
<i class="flaticon-email"></i>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" class="form-control" id="Phone" name="contact_no" placeholder="Enter Phone Number">
<i class="flaticon-call"></i>
</div>
</div>
<?php 
    $fetch = mysqli_query($con,"SELECT * FROM categories");
?>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<select name="category">
<option value="Select category">Select Category</option>
    <?php
        while ($row = mysqli_fetch_array($fetch)) { ?>
        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
    <?php } ?>
</select>
</div>
</div>
<?php 
    $fetch = mysqli_query($con,"SELECT * FROM doctors");
?>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
    <select name="doctor_name">
        <option value="">Select Doctor</option>
        <?php
        while ($row = mysqli_fetch_array($fetch)) { ?>
        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </select>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<div class="input-group date" id="datetimepicker">
<input type="text" class="form-control" name="date" placeholder="Date">
<span class="input-group-addon"></span>
</div>
<i class="flaticon-calendar"></i>
</div>
</div>
<div class="col-12">
<div class="appointment-btn">

</button> 
<input type="submit" name="btn-appointment" value="Confirm Appointment" class="default-btn">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<section class="consult-area ptb-100">
<div class="container-fluid pl-0">
<div class="row align-items-center">
<div class="col-lg-7">
<div class="consult-image">
<img src="assets/img/consult.jpg" alt="image">
</div>
</div>
<div class="col-lg-5">
<div class="consult-content">
<span>Online Consult</span>
<h3>Get 24/7 Care Right From Your Phone</h3>
<p><b>we are avail for you online consult also you can also talk with us also doctors through calls video calls chats messages also talk on your problems for solutions no extra charges will be taken from you.</b></p>
<ul class="list">
 <li>
<i class="flaticon-check-1"></i>
Get unlimited 24/7 Video Chat with a provider at no extra cost
</li>
<li>
<i class="flaticon-check-1"></i>
Easily book appointments and renew prescriptions
</li>
<li>
<i class="flaticon-check-1"></i>
Message with your provider
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<section class="footer-area pt-100 pb-70">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<h3>Tinzer</h3>
<p>Make An Appointment easily at home..</p>
<ul class="footer-social">
<li>
<a href="#">
<i class="fab fa-facebook-f"></i>
</a>
</li>
<li>
<a href="#">
<i class="fab fa-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="fab fa-pinterest-p"></i>
</a>
</li>
<li>
<a href="#">
<i class="fab fa-linkedin-in"></i>
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<h3>Instagram</h3>
<ul class="instagram">
<li>
<a href="#">
<img src="assets/img/instagram/1.jpg" alt="image">
</a>
</li>
<li>
<a href="#">
<img src="assets/img/instagram/2.jpg" alt="image">
</a>
</li>
<li>
<a href="#">
<img src="assets/img/instagram/3.jpg" alt="image">
</a>
</li>
<li>
<a href="#">
<img src="assets/img/instagram/4.jpg" alt="image">
</a>
 </li>
<li>
<a href="#">
<img src="assets/img/instagram/1.jpg" alt="image">
</a>
</li>
<li>
<a href="#">
<img src="assets/img/instagram/2.jpg" alt="image">
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget pl-5">
<h3>Useful Links</h3>
<ul class="footer-quick-links">
<li>
<a href="index.php">Home</a>
</li>
<li>
<a href="about.php">About</a>
</li>
<li>
<a href="services.php">Services</a>
</li>
<li>
<a href="shop.html">Shop</a>
</li>
<li>
<a href="projects.php">Our Projects</a>
</li>
<li>
<a href="contact.php">Contact</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<h3>Contact</h3>
<div class="footer-info-contact">
<i class="flaticon-call"></i>
<h3>Phone</h3>
<span><a href="tel:+92-(123)-456">+92-(123)-456</a></span>
</div>
<div class="footer-info-contact">
<i class="flaticon-email"></i>
<h3>Email</h3>
<span><a href="alishaista368@gmail.com"><span class="__cf_email__" data-cfemail="123456">[email&#160;protected]</span></a></span>
</div>
<div class="footer-info-contact">
<i class="flaticon-pin"></i>
<h3>Address</h3>
<span>Khairpur Mir's  Sindh, Pakistan</span>
</div>
</div>
</div>
</div>
</div>
<div class="lines">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>
</section>


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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/odometer.min.js"></script>

<script src="assets/js/jquery.appear.js"></script>

<script src="assets/js/datepicker.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


</html>
<?php 
    if (isset($_POST['btn-appointment'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        $category = $_POST['category'];
        $doctor_name = $_POST['doctor_name'];
        $date = $_POST['date'];
        $appointment = mysqli_query($con,"SELECT * FROM registration where username='$username' && email='$email'");
        $check = mysqli_num_rows($appointment);
        $fetch = mysqli_fetch_array($appointment);
        if ($check) {
            $insert = mysqli_query($con,"INSERT INTO appointment(username,email,contact_no,category,doctor_name,date) VALUES('$username','$email','$contact_no','$category','$doctor_name','$date')");
            if ($insert) {
                echo "<script>
                        swal({
                          title: 'Good job!',
                          text: 'Your Appointment Has been Recorded Successfully!',
                          icon: 'success',
                        }).then(function() {
                            window.location = 'index.php';
                        });
                    </script>";
            }

        }
        else
        {
            echo "<script>
                        swal({
                          title: 'Sorry!',
                          text: 'You Have to Sign Up First!',
                          icon: 'error',
                        }).then(function() {
                            window.location = 'sign-up.php';
                        });
                    </script>";
        }
    }
?>