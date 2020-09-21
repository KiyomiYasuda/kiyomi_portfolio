<?php

require_once '../class/item.php';
$item = new Item();

session_start();


if(isset($_POST['btnAdd'])){
  $item_name = $_POST['item_name'];
  $item_price = $_POST['item_price'];
  $item_quantity = $_POST['item_quantity'];
  $item_size = $_POST['item_size'];

  $item_img = $_FILES['item_img']['name'];

  $target_dir = "../uploads/";

  $target_file = $target_dir . basename($_FILES['item_img']['name']);

  $result =  $item->createItem($item_name, $item_price, $item_quantity, $item_img, $item_size);

  if($result == 1){
    move_uploaded_file($_FILES['item_img']['tmp_name'],$target_file);
    
    header("Location: ../views/onlineShop.php");
  }else{
    echo "Error in uploading the picture";
  }
}

if(isset($_POST['btnBuy'])){
  $item_id = $_POST['item_id'];
  $item_quantity = $_POST['item_quantity'];
  $buy_quantity = $_POST['buy_quantity'];
  $item_price = $_POST['item_price'];
  $user_id = $_SESSION['user_id'];

  $total_price = $buy_quantity * $item_price;

  if($buy_quantity <= $item_quantity){
    $item_quantity = $item_quantity-$buy_quantity;

    $item->buyItem($item_id, $item_quantity);

    $result = $item->createOrders($user_id, $item_id, $buy_quantity, $total_price);
    if($result == 1){
      header("Location: ../views/userOrderList.php");
    }
  }elseif($buy_quantity >$item_quantity){
    echo "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
    <strong>You cannot buy the item.</strong> You should check your quantity.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }
}

if(isset($_POST['update'])){
  $item_id = $_POST['item_id'];
  $up_name = $_POST['up_name'];
  $up_price = $_POST['up_price'];
  $up_size = $_POST['up_size'];
  $up_quantity = $_POST['up_quantity'];

  $up_img = $_FILES['up_img']['name'];

  $target_dir = "../uploads/";

  $target_file = $target_gir . basename($_FILES['up_img']['name']);

  $result = $item->updateItem($item_id, $up_name, $up_price, $up_size, $up_quantity, $up_img);
  
  if($result == 1){
    move_uploaded_file($_FILES['up_img']['tmp_name'],$target_file);
    
    header("Location: ../views/onlineShop.php");
  }else{
    echo "Error in uploading the picture";
  }
}

if(isset($_POST['cancel'])){
    $order_id = $_POST['orderId'];
    $item_id = $_POST['item_id'];

    $item_quantity = $_POST['item_quantity'];
    $cancelQuantity = $_POST['update_quantity'];
    $upQuantity = $item_quantity + $cancelQuantity;

    // $get_item_id = $item->getItemId($order_id);
    // $item_id = $get_item_id['item_id'];
      
      $resultUpdate = $item->updateQuantity($item_id, $upQuantity);
      if($resultUpdate == 1){

        $resultCancel = $item->cancelItem($order_id);
        if($resultCancel == 1){     
         header("Location: ../views/userOrderList.php");
        }else{
          echo "Error in canceling the Item.";
        }
      }else{
        echo "Error in updating the quanity.";
      }    
}

  if(isset($_POST['finalBuy'])){
    $payment_method = $_POST['payment_method'];
    $payment = $_POST['payment'];
    $fixPrice = $_POST['fixPrice'];
   
    if($payment < $fixPrice){
      echo "You cannot buy the items. You should check your payment.";
    }else{
      $change = $payment-$fixPrice;
      $result = $item->createFixedOrder($user_id, $fixPrice, $payment_method, $payment, $change);
      if($result == 1){
        
        $result = $item->updateBuyStatus($user_id);
        if($result == 1){
          header("Location: ../views/thankyou.php");
        }else{
          echo "Error updating your buy status.";
        }
        
      }else{
        echo "Error getting your order.";
      }
    }
    
  }

  if(isset($_POST['shippingUpdate'])){
    $shipping = $_POST['shipping'];
    $fixId = $_POST['fixId'];

    $result = $item->updateShipping($fixId, $shipping);
    if($result == 1){
      header ("Location: ../views/fixOrderList.php");
    }else{
      echo "Error updating shipping status of the order.";
    }
  }
?>