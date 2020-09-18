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
<title>User Order List</title>
</head>
<body style="background-color: #E6A756E6;">

<?php
  if($_SESSION['role'] == "A"){
    include '../views/adminShopNav.php';
  }else{
    include '../views/userShopNav.php' ;
  }
?>

  <div class="container w-75">
    <div class="container text-center">
      <h3 class="display-4">ORDERED LIST</h3>
    </div>

    <table class="table table-hover table-striped table-bordered mx-auto text-center my-5">
      <thead class="text-uppercase" style="background-color: indianred;">
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Size</th>
        <th>Buy Quantity</th>
        <th>Total Price</th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $result = $item->getUserOrderList(); 
          while($row = $result->fetch_assoc()){
        ?>
        <tr>
          <td><?= $row['item_name'] ?></td>
          <td><?= $row['item_price'] ?></td>
          <td><?= $row['item_size'] ?></td>
          <td><?= $row['buy_quantity'] ?></td>
          <td><?= $row['total_price'] ?></td>
          <td>
          <form action="../action/actionItem.php" method="POST">
            <input type="hidden" name="orderId" value="<?= $row['order_id'] ?>">
          
            <input type="hidden" name="item_quantity" value="<?= $row['item_quantity'] ?>">

            <input type="hidden" name="item_id" value="<?= $row['item_id'] ?>">
            
            <input type="hidden" name="update_quantity" value="<?= $row['buy_quantity'] ?>">

            <input type="submit" name="cancel" value="Cancel" class="form-control btn btn-warning text-uppercase my-2">
          </form>
        </td>
        </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="container w-50">
    <div class="card border-0">
      <div class="card-header bg-light">
        <h4 class="display-4">Buying Procedure</h4>
      </div>
      <div class="card-body">
        <div class="form-row mb-2">
          <div class="col-6">Total price</div>
          <div class="col-6">
        <form action="../action/actionItem.php" method="POST">
            <?php
              $user_id = $_SESSION['user_id'];
              $price_list = $item->getTotalPrice($user_id);
              // print_r($price_list);
              $sum = 0;
              foreach($price_list as $value){
              //  echo $value['total_price']."<br>";
               $sum += $value['total_price'];
              }
              echo $sum;
            ?>
            <input type="hidden" name="fixPrice" value="<?php echo $sum; ?>">
          </div>
          
        </div>
          <div class="form-row">
            <div class="col-6">Please select your choice of payment.</div>
            <div class="col-6">
              <select name="payment" id="" class="form-control">
                <option value="" disabled>Choose Payment method</option>
                <option value="Cash">Cash</option>
                <option value="CreditCard">Credit Card</option>
              </select>
            </div>
          </div>
          <div class="form-rol">
            <input type="submit" name="finalBuy" value="BUY" class="form-control btn btn-danger text-uppercase my-4">
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