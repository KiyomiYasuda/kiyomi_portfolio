<?php

  include '../action/actionItem.php';

  $item_id = $_GET['item_id'];

  $item_detail = $item->getBuyItem($item_id);

  if(!$_SESSION['user_id']){
    header("location:login.php");
    exit;
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
<title>buy item</title>
</head>
<body style="background-color: #E6A756E6;">
  <div class="container">
    <div class="card mx-auto w-50 my-5 px-4 border-0">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-header border-0 text-center">
          <img src="../uploads/<?php echo $item_detail['item_img'] ?>" style="height: 200px;">
        </div>

        <div class="cord-body">
        
          <div class="form-row">
            <div class="col-6 py-2">Item Name</div>
            <div class="col-6"><?php echo $item_detail['item_name'] ?><input type="hidden" name="item_id" value="<?php echo $item_detail['item_id'] ?>"></div>
          </div>
          <div class="form-row">
            <div class="col-6 py-2">Item Price</div>
            <div class="col-6"><?php echo $item_detail['item_price'] ?><input type="hidden" name="item_price" value="<?php echo $item_detail['item_price'] ?>"></div>
          </div>
          
          <div class="form-row">
            <div class="col-6 py-2">Item Size</div>
            <div class="col-6"><?php echo $item_detail['item_size'] ?></div>
          </div>
          <div class="form-row">
            <div class="col-6 py-2">Item Stock</div>            
            <div class="col-6">
              <?php echo $item_detail['item_quantity'] ?>
              <input type="hidden" name="item_quantity" value="<?php echo $item_detail['item_quantity'] ?>"></div>
            </div> 
          </div>
          <div class="form-row">
            <div class="col-6 py-2">Item Quantity</div>
            <div class="col-6"><input type="number" name="buy_quantity" class="form-control"></div>
          </div>

          <div class="form-row">
            <input type="submit" name="btnBuy" value="ORDER" class="btn btn-danger form-control my-3">
            <!-- <a href="confirmData.php?item_id=<?php //echo $item_detail['item_id'] ?>" class="btn btn-danger form-control my-3">BUY</a>  -->
          </div>
          <div class="form-row">
            
          </div>
        </div>
      </form>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>