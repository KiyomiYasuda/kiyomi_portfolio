<?php
  session_start();
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
<title>add item</title>
</head>

<?php
include '../views/adminShopNav.php';
?>
<body style="background-color: #E6A756E6;">
  <div class="container">
    <div class="card mx-auto w-50 my-5 px-4 border-0">
      <div class="card-header bg-white text-dark border-0">
        <h3 class="text-center">Add Item</h3>
      </div>

      <div class="cord-body">
        <form action="../action/actionItem.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <label for="">Item Name</label>
            <input type="text" name="item_name" class="form-control p-4" placeholder="Item Name" required>
          </div>
          <div class="form-row">
            <label for="">Item Price</label>
            <input type="number" name="item_price" class="form-control p-4" placeholder="Item Price" required>
          </div>
          <div class="form-row">
            <label for="">Item Quantity</label>
            <input type="number" name="item_quantity" class="form-control p-4" placeholder="Item Quantity" required>
          </div>
          <div class="form-row">
            <label for="">Item Size</label>
            <select name="item_size" class="form-control">
              <option value="" disabled>Choose Size</option>
              <option value="small(100g)">Small(100g)</option>
              <option value="medium(200g)">Medium(200g)</option>
              <option value="large(300g)">Large(300g)</option>
            </select>
          </div>
          <div class="form-row mt-3">
            <input type="file" name="item_img" class="form-control border-0">
          </div>

          <div class="form-row">
            <input type="submit" name="btnAdd" value="ADD" class="btn btn-danger form-control text-uppercase my-5">
          </div>
        </form>
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>