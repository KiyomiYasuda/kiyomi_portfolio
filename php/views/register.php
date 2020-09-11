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
<title>register</title>
</head>
<body style="background-color: #E6A756E6;">

<div class="container">
    <div class="card mx-auto w-50 my-5 border border-0">
      <div class="card-header text-danger border-0">
        <h2 class="text-center">Registration</h2>
      </div>
      <div class="card-body">
        <form action="../action/actionUser.php" method="POST">
        
          <div class="form-row">
            <div class="form-group col-md-6 mt-3">
              <label for="">First Name</label>
              <input type="text" name="first_name" class="form-control p-4" placeholder="First Name" required>
            </div>

            <div class="form-group col-md-6 mt-3">
              <label for="">Last Name</label>
              <input type="text" name="last_name" class="form-control p-4" placeholder="Last Name" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="">Username</label>
              <input type="text" name="username" class="form-control p-4" placeholder="Username" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="">E-mail</label>
              <input type="email" name="email" class="form-control p-4" placeholder="E-mail" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="">Address</label>
              <input type="text" name="address" class="form-control p-4" placeholder="Address" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control p-4" placeholder="Password" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="">Confirm Password</label>
              <input type="password" name="confirmPassw" class="form-control p-4" placeholder="Confirm Password" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">              
            <input type="submit" name="register" value="Register" class="btn btn-danger form-control text-uppercase">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>