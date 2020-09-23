<?php

  require_once 'Database.php';

  class User extends Database{

    public function createUser($first_name, $last_name, $username, $email, $address, $passw){

      $sqlAccount = "INSERT INTO account (username, password) VALUES ('$username', '$passw')";

      if($this->conn->query($sqlAccount)){
        $account_id = $this->conn->insert_id;

        $sqlUsers = "INSERT INTO users(first_name, last_name, email, address, account_id) VALUES ('$first_name', '$last_name', '$email', '$address', $account_id)";

        if($this->conn->query($sqlUsers)){
          header("Location: ../views/login.php");
        }else{
          die("Cannot add user:".$this->conn->error);
        }
      }
    }

    public function login($username, $passw){
      $sql = "SELECT * FROM accounts INNER JOIN users on accounts.account_id = users.account_id WHERE accounts.username = '$username' AND accounts.password = '$passw'";

      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
        return $result->fetch_assoc();        
      }else{
        return false;
      }
    }

    public function Post($fullName, $email, $content){
      $sql = "INSERT INTO posts (full_name, email, content) VALUES ('$fullName', '$email', '$content')";

      if($this->conn->query($sql)){
        return 1;
      }else{
        die("Error sending your post:" . $this->conn->error);
      }
    }

    public function getPosts(){
      $sql = "SELECT full_name, email, content FROM posts";
      $result = $this->conn->query($sql);

      if($result->num_rows > 0){
        return $result;        
      }else{
        return false;
      }
    }
  }

?>