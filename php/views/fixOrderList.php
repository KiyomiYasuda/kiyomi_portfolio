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
<title>Final Order List</title>
</head>
<body style="background-color: #E6A756E6;">

  <?php
    include '../views/adminShopNav.php';
  ?>

  <div class="container w-75">
    <div class="container text-center">
      <h3 class="display-4">FIXED ORDERED LIST</h3>
    </div>

    <table class="table table-hover table-striped table-bordered mx-auto text-center my-5">
      <thead class="text-uppercase" style="background-color: indianred;">
        <th>User Name</th>
        <th>Address</th>
        <th>All Total Price</th>
        <th>Payment Method</th>
        <th>Shipping Status</th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $result = $item->fixOrderList();
          while($row = $result->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $row['first_name'] . " " .$row['last_name']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?= $row['fix_price'] ?></td>
          <td><?= $row['payment']  ?></td>
          <form action="../action/actionItem.php" method="POST">
            <td>
              <label for="">Not yet</label>
              <input type="radio" name="shipping" value="NotYet"><br>
              <label for="">Being prepared</label>
              <input type="radio" name="shipping" value="Preparing"><br>
              <label for="">Delivered</label>
              <input type="radio" name="shipping" value="Delivered">
              <input type="hidden" name="fixId" value="<?= $row['fix_id']  ?>">
            </td>
            <td>
              <input type="submit" name="shippingUpdate" value="UPDATE" class="btn btn-danger form-control">
              <br>
              <p class="mt-2"><?= $row['shipping_status']  ?></p>
            </td>
          </form> 
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