<?php

session_start();
if(empty($_SESSION)){
  header("Location: ../views/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Cafe Menu</title>
</head>
<body style="background-color: #2d160e;">

<?php
  if($_SESSION['role'] == "A"){
    include '../views/adminShopNav.php';
  }else{
    include '../views/userShopNav.php' ;
  }
?>

<section class="page-section cta">
  <div class="container" style="background-color: #E6A756E6;">
    <div class="row"></div>
      <div class="col-6 mx-auto my-5" style="background-color: #f2c287;">
        <div class="text-center rounded">
          <h3 class="display-4 ty-3 my-5">Cafe Menu</h3>
          <ul class="list-unstyled">
            <li class="d-flex lead font-weight-bold mt-2">HOT</li>
            <li class="d-flex lead">American Coffee<span class="ml-auto">300yen</span></li>
            <li class="d-flex lead">Blended Coffee<span class="ml-auto">300yen</span></li>
            <li class="d-flex lead">Espresso<span class="ml-auto">300yen</span></li>
            <li class="d-flex lead">Cafe Latte<span class="ml-auto">350yen</span></li>
            <li class="d-flex lead">Rooibos Tea<span class="ml-auto ">300yen</span></li>
            <li class="d-flex lead">Cocoa<span class="ml-auto ">300yen</span></li>

            <li class="d-flex lead font-weight-bold mt-2">COLD</li>
            <li class="d-flex lead">Iced Coffee<span class="ml-auto">300yen</span></li>
            <li class="d-flex lead">Iced Cafe Latte<span class="ml-auto">300yen</span></li>
            <li class="d-flex lead">Cold Rooibos Tea<span class="ml-auto ">300yen</span></li>
            <li class="d-flex lead">Cold Cocoa<span class="ml-auto ">300yen</span></li>
            <li class="d-flex lead pb-5">Coffee Frappuccino<span class="ml-auto">400yen</span></li>
                     
            
            
          </ul>
          <ul class="list-unstyled ">
            <li class="d-flex lead font-weight-bold mt-2">FOOD</li>
            <li class="d-flex">
              <img src="../uploads/Croissant.jpg" alt="" style="height: 150px;">
            </li>
            <li class="d-flex lead">Croissant<span class="ml-auto">100yen</span></li>
            <li class="d-flex">
              <img src="../uploads/scone.jpg" alt="" style="height: 150px;">
            </li>
            <li class="d-flex lead">Scone<span class="ml-auto">100yen</span></li>
            <li class="d-flex">
              <img src="../uploads/bagel.jpg" alt="" style="height: 150px;">
            </li>
            <li class="d-flex  lead">Bagel<span class="ml-auto">100yen</span></li>
            <li class="d-flex">
              <img src="../uploads/blueberryBagel.jpg" alt="" style="height: 150px;">
            </li>
            <li class="d-flex  lead">Blueberry Bagel<span class="ml-auto">150yen</span></li>
            <li class="d-flex">
              <img src="../uploads/sandwich.jpg" alt="" style="height: 150px;">
            </li>
            <li class="d-flex lead">Sandwich<span class="ml-auto">300yen</span></li>
          </ul>
        </div>
      </div>
    <div class="row"></div>
  </div>
</section> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>