<?php

  include '../action/actionUser.php';

  $item_name = $_GET['item_name'];

  //if(!$_SESSION['user_id']){
    //header("location:login.php");
    //exit;
  //}

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
<title>Review</title>
</head>
<body  style="background-color: #E6A756E6;">
  <div class="card w-50 mx-auto my-4">
    <div class="card-header">
      <h3 class="display-4">Create Review</h3>
    </div>
    <form action="" method="post">
      <div class="card-body">
        
        <h4><?php echo $item_name ?></h4>
        <input type="hidden" name="item_name" value="<?php echo $item_name ?>">
        <label for="">Nickname</label>
        <input type="text" name="name" placeholder="Nickname" class="form-control" required>
        <p class="mt-3">Review</p>
        <textarea name="review" id="" cols="30" rows="10" class="form-control"></textarea>

        <input type="submit" name="btnReview" class="form-control btn-danger my-3" value="SEND">
      </div>
    </form>

  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>