<?php
session_start();
if($_SESSION){
    if($_SESSION['level']=="superadmin")
    {
        header("Location: super_admin");
    }
    
    if($_SESSION['level']=="admin")
    {
        header("Location: admin");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
      <title> e - TLHP</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="images/image.css">
</head>
<!-- <body>
      <h1><br><br><br></h1>
      <h1>Welcome to e-TLHP</h1><br>
      <h4 class='dinas'>"DINAS KOMUNIKASI DAN INFORMATIKA KOTA KENDARI"</h4>
      <h4 class='login'>Silahkan login untuk memulai pekerjaan Anda!</h4>
      <p class="mb-0"><a href="../login_user.php" class="btn btn-primary px-4 py-2 rounded-0">Login</a></p>
</body> -->
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
<div class="site-wrap" id="home-section">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-lg-4">
          <nav class="site-navigation text-right ml-auto " role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li class="active"><a href="index.html" class="nav-link"></a></li>
              <li><a href="project.html" class="nav-link"></a></li>
              <li><a href="services.html" class="nav-link"></a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-4 text-center">
          <div >
          <br><h2>Welcome to <span class="text-primary">e-TLHP</span></h2>
            <p>Dinas Komunikasi dan Informatika Kota Kendari</p>
          </div>


          
        </div>
        <div class="col-lg-4">
          <nav class="site-navigation text-left mr-auto " role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li><a href="about.html" class="nav-link"></a></li>
              <li><a href="blog.html" class="nav-link"></a></li>
              <li><a href="contact.html" class="nav-link"></a></li>
            </ul>
          </nav>
        </div>
        

      </div>
    </div>

  </header>




<div class="owl-carousel owl-1">
  <div class="ftco-blocks-cover-1">
    
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center"><br><br><br><br><br><br><br><br><br><br>
            <h5>
            Silahkan login untuk memulai pekerjaan Anda!<br><br>
            </h5>
              <p class="mb-0"><a href="login.php" class="btn btn-primary px-4 py-2 rounded-0">Login</a></p><br><br><br>
              <br><br><br><br><br>
            <p> 
              <strong>Copyright &copy; 2021 Team CIA-IT UHO Akt.2018</strong>
            </p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>
</html>