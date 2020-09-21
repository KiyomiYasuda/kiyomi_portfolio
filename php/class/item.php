<?php
  require_once 'Database.php';

  class Item extends Database{

    public function createItem($item_name, $item_price, $item_quantity, $item_img, $item_size){

      $sql = "INSERT INTO items(item_name, item_price, item_quantity, item_img, item_size) VALUES ('$item_name', '$item_price','$item_quantity', '$item_img', '$item_size')";

      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error adding your item:" . $this->conn->error);
      }
    }
    // public function createImg($item_img){
    //   $sql = "UPDATE items SET item_img = '$item_img' WHERE user_id = '1'";
    //   if($this->conn->query($sql)){
    //     return 1;
    //   }else{
    //     return 0;
    //   }
    // }

    public function getItems(){
      $sql = "SELECT * FROM items";
      $result = $this->conn->query($sql);

      $items = array();
      if($result->num_rows >0){
        while($items_details = $result->fetch_assoc()){
          $items[] = $items_details;
        }
        return $items;
      }else{
        return false;
      }
    }
    
    public function getBuyItem($item_id){
      $sql = "SELECT * FROM items WHERE item_id = '$item_id'";

      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
        return $result->fetch_assoc();
      }else{
        return false;
      }
    }

    public function buyItem($item_id, $item_quantity){
      $sql = "UPDATE items SET item_quantity = '$item_quantity'
              WHERE item_id = '$item_id'";
      
      $result = $this->conn->query($sql);

      if($result){
        header("Location: ../views/userOrderList.php");
        
      }else{
        echo "Error" .$this->conn->error;
      }
    }

    public function createOrders($user_id, $item_id, $buy_quantity, $total_price){
      $sql = "INSERT INTO orders (user_id, item_id, buy_quantity, total_price) VALUES ('$user_id', '$item_id', '$buy_quantity', '$total_price')";

      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error adding order:" . $this->conn->error);
      }
    }

    public function getUpdateItem($item_id){
      $sql = "SELECT * FROM items WHERE item_id = '$item_id'";

      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
        return $result->fetch_assoc();
      }else{
        return false;
      }
    }

    public function updateItem($item_id, $up_name, $up_price, $up_size, $up_quantity, $up_img){
      $sql = "UPDATE items 
      SET item_name = '$up_name', item_price  = '$up_price', item_size = '$up_size', item_quantity = '$up_quantity', item_img = '$up_img' 
      WHERE item_id = '$item_id'";

      $result = $this->conn->query($sql);

      if($result){
        header("Location: ../views/onlineShop.php");
      }else{
        echo "Error" .$this->conn->error;
      }
    }

    public function getOrderList(){
      $sql = "SELECT users.first_name, users.last_name, users.address, items.item_name, items.item_price, items.item_size, orders.buy_quantity, orders.total_price, orders.buy_status
      FROM orders
      INNER JOIN users
      ON users.user_id = orders.user_id
      INNER JOIN items
      ON orders.item_id = items.item_id";

      $result = $this->conn->query($sql);

      if($result){
        return $result;
      }else {
        die("Error:" . $this->conn->error);
      }
    }

    public function getUserOrderList(){

      $user_id = $_SESSION['user_id'];
      $sql = "SELECT items.item_id, items.item_name, items.item_price, items.item_size, items.item_quantity, orders.buy_quantity, orders.total_price, orders.order_id
      FROM orders
      INNER JOIN items
      ON orders.item_id = items.item_id
      WHERE orders.user_id ='$user_id' AND orders.buy_status != 'PAID'";

      $result = $this->conn->query($sql);

      if($result){
        return $result;
      }else {
        die("Error:" . $this->conn->error);
      }
    }

    public function getTotalPrice($user_id){
      $sql = "SELECT total_price FROM orders WHERE user_id = '$user_id' AND buy_status = 'PENDING'";
      $result = $this->conn->query($sql);
      // $price = array();
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $price[] = $row;
        }
        return $price;
      }else{
        die("Error:" . $this->conn->error);
      }
    }

    public function cancelItem($order_id){
      $sql = "DELETE FROM orders WHERE order_id = $order_id";

      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error deleting your item:" . $this->conn->error);
      }
    }

    public function updateQuantity($item_id, $upQuantity){
      $sql = "UPDATE items SET item_quantity = '$upQuantity' WHERE item_id = '$item_id'";
      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error updating the quantity:" . $this->conn->error);
      }
    }

    public function createFixedOrder($user_id, $fixPrice, $payment_method, $payment, $change){
      $user_id = $_SESSION['user_id'];
      $sql = "INSERT INTO fix_orders (user_id, fix_price, payment_method, payment, payment_change) VALUES ('$user_id', '$fixPrice', '$payment_method', '$payment', '$change')";

      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error getting your order." . $this->conn->error);
      }
    }

    public function fixOrderList(){
      $sql = "SELECT users.first_name, users.last_name, users.address, fix_orders.fix_id, fix_orders.fix_price, fix_orders.payment_method, fix_orders.payment, fix_orders.payment_change, fix_orders.shipping_status
      FROM fix_orders
      INNER JOIN users
      ON fix_orders.user_id = users.user_id";
      $result = $this->conn->query($sql);
      if($result->num_rows >0){
        return $result;
      }else{
        return false;
      }
    }

    public function updateBuyStatus($user_id){
      $user_id = $_SESSION['user_id'];
      $sql = "UPDATE orders SET buy_status = 'PAID' WHERE user_id = $user_id";

      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error updating the buy status:" . $this->conn->error);
      }
    }

    public function getFixPrice(){
      $user_id = $_SESSION['user_id'];
      $sql = "SELECT total_price FROM orders WHERE user_id = '$user_id'";

      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
        return $result->fetch_assoc();
      }else{
        return false;
      }
    }

    public function deleteOrder($user_id){
      $user_id = $_SESSION['user_id'];
      $sql = "DELETE FROM orders WHERE user_id = $user_id";
      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error deleting your orders:" . $this->conn->error);
      }
    }

    public function updateShipping($fixId, $shipping){
      $sql = "UPDATE fix_orders SET shipping_status = '$shipping' WHERE fix_id = '$fixId'";

      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error updating shipping status.:" . $this->conn->error);
      }
    }

    

  }

?>