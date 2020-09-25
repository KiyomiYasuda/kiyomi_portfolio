<?php

require_once '../class/user.php';
$user = new User();
session_start();


if(isset($_POST['register'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $passw = md5($_POST['password']);
  $confirmPassw = md5($_POST['confirmPassw']);

  if($passw == $confirmPassw){
    $user->createUser($first_name, $last_name, $username, $email, $address, $passw);
  }else {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Password and Confirm Password are not match!</strong> You should check them.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }

}elseif(isset($_POST['login'])){
  $username = $_POST['username'];
  $passw = md5( $_POST['password']);

  $login = $user->login($username, $passw);

  if($login){
    $_SESSION['account_id'] = $login['account_id'];
    $_SESSION['user_id'] = $login['user_id'];
    $_SESSION['role'] = $login['role'];
    $_SESSION['username'] = $login['username'];
    $_SESSION['first_name'] = $login['first_name'];
    $_SESSION['last_name'] = $login['last_name'];
    $_SESSION['email'] = $login['email'];
    $_SESSION['address'] = $login['address'];

    header("Location: ../../index.php");

  }else{
    echo "Incorrect Username and Password";
  }
}

if(isset($_POST['btnPost'])){
  $fullName = $_POST['fullname'];
  $email = $_POST['email'];
  $content = $_POST['content'];

  $result = $user->Post($fullName, $email, $content);
  if($result == 1){
     header("Location: ../../about.php");
  }
}


?>