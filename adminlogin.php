<?php

//require_once "navbar.php";
require_once "header.php";


?>

<!DOCTYPE html>
<html>

<head>
  <title></title>


</head>


<body style="background-image: url('assets/image/user1.jpeg'); background-size:cover;  ">






  <?php
  if (isset($_POST['login'])) {

    $aid = $_POST['name'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$aid' and password='$password' ";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)) {
      $row = mysqli_fetch_array($result);
      $_SESSION['id'] = $row['id'];
      $_SESSION['admin'] = $row['username'];
      $_SESSION['role'] = 'ADMIN';
      alert("You have been logged-in successfuly.");
      //redirecting
      redirect_to("admin_panel.php");
    } else {
      alert("please provide correct login detail: " . mysqli_error($link));
    }
  }
  ?>
  <br>
  <br>
  <h3 class="container"></h3>
  </div>
  <div class="container" id="form">
    <h3> Admin Login</h3>
    <form action="" method="POST">


      <div class="form-group">
        <label for="id">Username:</label>
        <input type="text" class="form-control" id="name" name="name" required="">
      </div>
      <div class="form-group">
        <label for="name">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required="">
      </div>

      <input type="submit" class="btn btn-success" value="Login" name="login" id="Login" />
      <input type="reset" class="btn btn-info" value="Reset" name="reset" id="Reset" />
      <a href="../index.php" class="btn btn-primary">back </a>
    </form>
  </div>



  </div>
</body>

</html>