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
<title>Order List</title>
</head>
<body style="background-color: #E6A756E6;">

<?php
include '../views/adminShopNav.php';
?>

<div class="container w-75">
    <div class="container text-center">
      <h3 class="display-4">ORDER LIST</h3>
    </div>

    <table class="table table-hover table-striped table-bordered mx-auto text-center my-5">
      <thead class="text-uppercase" style="background-color: indianred;">
        <th>Name</th>
        <th>User Address</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Size</th>
        <th>Buy Quantity</th>
        <th>Total Price</th>
        <th>Buy Status</th>
      </thead>
      <tbody>
        <?php
          $result = $item->getOrderList(); 
          while($row = $result->fetch_assoc()){
        ?>
        <tr>
          <td><?= $row['first_name']." ".$row['last_name'] ?></td>
          <td><?= $row['address'] ?></td>
          <td><?= $row['item_name'] ?></td>
          <td><?= $row['item_price'] ?></td>
          <td><?= $row['item_size'] ?></td>
          <td><?= $row['buy_quantity'] ?></td>
          <td><?= $row['total_price'] ?></td>
          <td><?= $row['buy_status'] ?></td>
        </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>