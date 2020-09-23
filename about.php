<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Business Casual - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/15b684dcde.js" crossorigin="anonymous"></script>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>


</head>

<body>
   
  <?php
    if(!empty($_SESSION)){
  ?>
  <a href="../kiyomi_portfolio/php/views/logout.php" class="btn btn-dark rounded-pill float-right px-4 m-4 text-white font-weight-bold">Log Out<i class="fas fa-sign-out-alt fa-lg ml-2"></i></a><br>
  <?php
    }else{
  ?>
  <a href="../kiyomi_portfolio/php/views/login.php" class="btn btn-danger rounded-pill float-right px-4 m-4 text-white font-weight-bold ">Log in<i class="fas fa-sign-in-alt fa-lg ml-2"></i></a><br>
  <?php } ?>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">One person, One cup, at a time</span>
    <span class="site-heading-lower">Kiyomi Cafe</span>
  </h1>

  <?php 
    if(!empty($_SESSION)){
      echo "<h3 class='text-white m-3 text-center font-italic'>Welcome, " .$_SESSION['username'] . "</h3>";
    }
    if($_SESSION['role'] == "A"){
      echo "<div class='text-center'><a href='../kiyomi_portfolio/php/views/onlineShop.php' class='h5 text-white'>To Admin Online Shop Page <i class='fas fa-angle-double-right'></i></a></div>";
    }
  ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Kiyomi Cafe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../kiyomi_portfolio/index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../kiyomi_portfolio/about.php">About</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../kiyomi_portfolio/products.php">Online Shop</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../kiyomi_portfolio/store.php">Store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                <span class="section-heading-lower">About Our Cafe</span>
              </h2>
              <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
              <p class="mb-0">We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26588.931642284195!2d130.384589468693!3d33.58930633646067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191958981c361%3A0xe0edba177a7419d1!2z44Kt44Oj44OK44Or44K344OG44Kj5Y2a5aSa!5e0!3m2!1sja!2sjp!4v1600841141800!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      
      <div class="text-center mt-4">
        <div class="row">
          <div class="col-4">
            <a href="#" class="text-white"><i class="fab fa-instagram-square fa-4x"></i></a>
          </div>
          <div class="col-4">
            <a href="#" class="text-white"><i class="fas fa-blog fa-4x"></i></a>
          </div>
          <div class="col-4">
            <a href="../kiyomi_portfolio/php/views/sendMail.php" class="text-white"><i class="far fa-envelope fa-4x"></i></a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
