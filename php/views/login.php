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
<title>login</title>
</head>
<body style="background-color: #E6A756E6;">

  <div class="container w-50 text-center" >
    <h3 class="display-4 my-4">Log In</h3>

    <form action="../action/actionUser.php" method="POST">

    <label for="" class="font-weight-bold float-left">Username</label>
    <input type="text" name="username" class="form-control mb-4" placeholder="Username">

    <label for=""  class="font-weight-bold float-left">Password</label>
    <input type="password" name="password" class="form-control mb-3" placeholder="Password">

    <input type="submit" name="login" value="Login" class="btn btn-dark form-control text-uppercase my-3">
    </form>

    <a href="register.php" class="float-right text-dark font-weight-bold">Create Account <i class="fas fa-angle-double-right"></i></a>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
