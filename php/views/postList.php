<?php
  include '../action/actionUser.php';

?>


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
<title>Posts List</title>
</head>
<body style="background-color: #E6A756E6;">
<?php
include '../views/adminShopNav.php';
?>

  <div class="container w-75">
    <h3 class="display-4">POSTS</h3>
    <table class="table table-hover table-striped table-bordered mx-auto text-center mb-5">
      <thead class="text-uppercase" style="background-color: indianred;">
        <th>Name</th>
        <th>E-mail</th>
        <th>Content</th>
      </thead>
      <tbody>
        <?php 
          $post_list = $user->getPosts();
          foreach($post_list as $post_details){
        ?>
        <tr>
          <td><?php echo $post_details['full_name'] ?></td>
          <td><?php echo $post_details['email'] ?></td>
          <td><?php echo $post_details['content'] ?></td>
          <?php } ?>
      </tbody>
    </table>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>