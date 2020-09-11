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
      header("Location: ../views/onlineShop.php");
    }
  }elseif($buy_quantity >$item_quantity){
    echo "You cannot buy this item.";
  }

}

if(isset($_POST['update'])){
  $up_name = $_POST['up_name'];
  $up_price = $_POST['up_price'];
  $up_size = $_POST['up_size'];
  $up_quantity = $_POST['up_quantity'];
  
}




?>