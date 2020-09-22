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
<title>Admin OnlineShop Navbar</title>
</head>
<body>

  <nav class="navbar navbar-dark navbar-expand-md py-3" style="background-color: #2d160e;">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold text-white" href="../../index.php">Kiyomi Cafe</a> 

      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#userNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="userNav">
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a href="../views/cafeMenu.php" class="nav-link text-uppercase text-expanded text-white mx-2">Cafe Menu</a>
          </li>
          <li class="nav-item active">
            <a href="../views/onlineShop.php" class="nav-link text-uppercase text-expanded text-white mx-2">Online Shop</a>
          </li>
          <li class="nav-item active">
            <a href="../views/userOrderList.php" class="nav-link text-uppercase text-expanded text-white mx-2">Order List</a>
          </li>
          <li class="nav-item active">
            <a href="../views/orderHistory.php" class="nav-link text-uppercase text-expanded text-white mx-2">Order History</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item active text-white mx-2 my-2"><i class="fas fa-user"></i> User <?= $_SESSION['username'] ?></li>
          <a href="../views/logout.php" class="text-white m-2"><i class="fas fa-sign-out-alt fa-lg"></i></a></button>
          
        </ul>
      </div>
  </nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>