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
<title>Online Shop</title>
</head>
<body style="background-color: #E6A756E6;">
<?php
  if($_SESSION['role'] == "A"){
    echo "<a href='editItem.php' class='float-right font-weight-bold m-4 btn btn-danger'>To Edit Item Page</a>";
  }else{
    echo "<a href='../../index.html' class='float-right font-weight-bold m-4 btn btn-danger'>To Home</a>";
  }
?>
  <div class="container w-75">
    <div class="container text-center">
      <h3 class="display-4">Welcome,<?= $_SESSION['username'] ?></h3>
    </div>

    <table class="table table-hover table-striped table-bordered mx-auto text-center my-5">
      <thead class="text-uppercase" style="background-color: indianred;">
        <th>Item ID</th>
        <th>Picture</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Size</th>
        <th>Item Quantity</th>
        <th></th>
      </thead>
      <tbody>
        <?php 
          $item_list = $item->getItems();
          foreach($item_list as $items_details){
        ?>
        <tr>
          <td><?php echo $items_details['item_id'] ?></td>
          <td>
            <img src="../uploads/<?php echo $items_details['item_img'] ?>" class="img-thumbnail" style="height: 150px;">
          </td>
          <td><?php echo $items_details['item_name'] ?></td>
          <td><?php echo $items_details['item_price'] ?></td>
          <td><?php echo $items_details['item_size'] ?></td>
          <td><?php echo $items_details['item_quantity'] ?></td>
          <td><a href="buyItem.php?item_id=<?php echo $items_details['item_id']?>" class="btn btn-danger" role="button">BUY</a></td>
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