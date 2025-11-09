<?php

?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="assets/bootstrap/css/spec.css" rel="stylesheet" />


  <link href="assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />


  <link href="assets/fontawsome/css/all.css" rel="stylesheet" />

  <script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="assets/bootstrap/js/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</head>
<?php
//require_once "navbar.php";
require_once "header.php";
?>

<body>
  <div class="body">

    <!-- partial:index.partial.html -->
    <a href="adminlogin.php" alt="Mythrill">
      <div class="card">
        <div class="wrapper">
          <h3 class="title text-success">Admin Login</h3>

          <img src="assets/image/admin1.jpg" class="cover-image" />
        </div>
        <img src="assets/image/admin.png" class="character" />


      </div>
    </a>

    <a href="babysitterlogin.php" alt="Mythrill">
      <div class="card">
        <div class="wrapper">
          <h3 class="title text-success">Babysitter Login</h3>

          <img src="assets/image/babysitter1.jpg" class="cover-image" />
        </div>
        <img src="assets/image/babysitter2.jpg" class="character" />
      </div>
    </a>
    <!-- partial -->
    <a href="userlogin.php" alt="Mythrill">
      <div class="card">
        <div class="wrapper">
          <h3 class="title text-success">User Login</h3>

          <img src="assets/image/user2.jpeg" class="cover-image" />
        </div>
        <img src="assets/image/user1.jpeg" class="character" />
      </div>
    </a>
</body>

</html>