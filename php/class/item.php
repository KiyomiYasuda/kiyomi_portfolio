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
        header("Location: ../views/onlineShop.php");
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
      $sql = "SELECT users.first_name, users.last_name, users.address, items.item_name, items.item_price, items.item_size, orders.buy_quantity, orders.total_price
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
      $sql = "SELECT items.item_name, items.item_price, items.item_size, orders.buy_quantity, orders.total_price
      FROM orders
      INNER JOIN items
      ON orders.item_id = items.item_id
      WHERE orders.user_id = $user_id";

      $result = $this->conn->query($sql);

      if($result){
        return $result;
      }else {
        die("Error:" . $this->conn->error);
      }
    }
  }

?>