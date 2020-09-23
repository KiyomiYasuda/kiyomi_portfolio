
<?php
  include '../action/actionItem.php';

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
<title>User Order History</title>
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
    <h3 class="display-4">Order History</h3>
    <table class="table table-hover table-striped table-bordered mx-auto text-center mb-5">
      <thead class="text-uppercase" style="background-color: indianred;">
        <th>Picture</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Size</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $user_id = $_SESSION['user_id'];
          $item_list = $item->getOrderHistory($user_id);
          foreach($item_list as $items_details){
        ?>
        <tr>
          <td>
            <img src="../uploads/<?php echo $items_details['item_img'] ?>" class="img-thumbnail" style="height: 150px;">
          </td>
          <td><?php echo $items_details['item_name'] ?></td>
          <td><?php echo $items_details['item_price'] ?></td>
          <td><?php echo $items_details['item_size'] ?></td>
          <td><?php echo $items_details['buy_quantity'] ?></td>
          <td><?php echo $items_details['total_price'] ?></td>
          <th>
            <a href="../views/sendReview.php?item_name=<?php echo $items_details['item_name'] ?>" class="btn btn-warning">Write Reveiw</a>
          </th>
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