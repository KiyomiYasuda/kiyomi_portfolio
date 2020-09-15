<?php

require_once 'Database.php';

class Delete extends Database{

  public function deleteItem($item_id){
    $sql = "DELETE FROM items WHERE item_id = '$item_id'";

    if($this->conn->query($sql)){
      header("Location:../views/onlineShop.php");
    }else{
      die("Error deleting the item:". $this->conn->error);
    }
  }
}

?>