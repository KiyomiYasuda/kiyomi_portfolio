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
<title>Post Mail</title>
</head>
<body style="background-color: #E6A756E6;">

  <div class="container w-50 text-center">
    <h3 class="display-4">Contact Form</h3>
    <form action="../action/actionUser.php" method="post">
      <label for="" class="lead mt-2">Full Name</label>
      <input type="text" name="fullname" placeholder="Full Name" class="form-control" required>
      <label for="" class="lead mt-2">E-mail</label>
      <input type="text" name="email" placeholder="E-mail" class="form-control" required>
      <label for="" class="lead mt-2">Text</label><br>
      <textarea name="content" id="" cols="" rows="10" class="form-control"></textarea>

      <input type="submit" value="SUBMIT" name="btnPost" class="form-control btn-danger my-4">
    </form>

    <a href="../../index.php" class="float-right mb-4 text-dark">To Home <i class="fas fa-angle-double-right"></i></a>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>