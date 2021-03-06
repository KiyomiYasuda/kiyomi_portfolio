<?php
  include '../action/actionItem.php';
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
<title>thank</title>
</head>
<body style="background-color: #E6A756E6;">
  <div class="container w-50">
    <h3 class="display-4 text-center mt-5">Thank you for your purchase at Kiyomi Cafe.</h3>
    <br>
    <a href="../../index.php" class="float-right lead text-dark">Back to Home <i class="fas fa-angle-double-right"></i></a><br>
  </div>
    <div class=" container text-center w-50 border px-5 py-3 bg-white my-4">
      <h4>Receipt</h4>
      <ul class="list-unstyled">

        <li class="d-flex lead">Name<span class="ml-auto"><?php echo $_SESSION['first_name']. " ". $_SESSION['last_name']; ?></span></li>
        <hr>
        <?php
          $user_id = $_SESSION['user_id'];
          $today = date("Y-m-d");
          $result = $item->getReceipt($user_id, $today);
          while($row = $result->fetch_assoc()){
        ?>
        <li class="d-flex lead">Total Price (Tax included)<span class="ml-auto"><?= $row['fix_price'] ?></span></li>
        <li class="d-flex lead">Tax<span class="ml-auto"><?php echo $row['fix_price']/10 ?></span></li>
        <li class="d-flex lead">Payment<span class="ml-auto"><?= $row['payment'] ?></span></li>
        <li class="d-flex lead">Change<span class="ml-auto"><?= $row['payment_change'] ?></span></li>
        <hr>
        <?php } ?>
        
        <li class="d-flex lead">Date<span class="ml-auto">
          <?php 
           $today = date("Y-m-d");
           print_r($today);
          ?>
        </span></li>
      </ul>
    </div>
  
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>