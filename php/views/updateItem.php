<?php
  include '../action/actionItem.php';

  // if(!$_SESSION['user_id']){
  //   header("location:login.php");
  //   exit;
  // }
  $item_id = $_GET['item_id'];
  $item_detail = $item->getUpdateItem($item_id);

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
<title>Update Item</title>
</head>
<body  style="background-color: #E6A756E6;">

  <div class="container">
    <div class="card mx-auto w-50 my-5 px-4 border-0">
      <form action="../action/actionItem.php" method="POST" enctype="multipart/form-data">
        <div class="card-header border-0 text-center">
          <img src="../uploads/<?php echo $item_detail['item_img'] ?>" style="height: 200px;">
          <input type="file" name="up_img" class="form-control border-0 my-3">
        </div>

        <div class="cord-body">
        
          <div class="form-row">
            <div class="col-6 py-2">Item Name</div>
            <div class="col-6"><input type="text" name="up_name" class="form-control" value="<?php echo $item_detail['item_name'] ?>"><input type="hidden" name="item_id" value="<?php echo $item_detail['item_id'] ?>"></div>
          </div>
          <div class="form-row">
            <div class="col-6 py-2">Item Price</div>
            <div class="col-6"><input type="number" name="up_price" class="form-control" value="<?php echo $item_detail['item_price'] ?>"></div>
          </div>
          
          <div class="form-row">
            <div class="col-6 py-2">Item Size</div>
            <div class="col-6">
              <input type="text" name="up_size" class="form-control" value="<?php echo $item_detail['item_size'] ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="col-6 py-2">Item Stock</div>            
            <div class="col-6">
              <input type="number" name="up_quantity" class="form-control" value="<?php echo $item_detail['item_quantity'] ?>"></div>
            </div> 
          </div>

          <div class="form-row">
            <input type="submit" name="update" value="UPDATE" class="btn btn-danger form-control my-3">

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