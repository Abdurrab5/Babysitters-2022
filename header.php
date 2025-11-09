<?php


require_once "connection.php";
require_once "functions.php";

session_start();
require_once "sidebar.php";

?>


<html>

<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">


  <link href="assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />


  <link href="assets/fontawsome/css/all.css" rel="stylesheet" />
  <link href="assets/fontawesome/css/all.min" rel="stylesheet" />
  <script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="assets/bootstrap/js/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>


  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">


  <link href="assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />


  <link href="assets/fontawsome/css/all.css" rel="stylesheet" />
  <link href="assets/fontawesome/css/all.min" rel="stylesheet" />
  <script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="assets/bootstrap/js/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark  ">


    <a class="navbar-brand btn btn-dark bg-dark" href="index.php">
      <?php
      if (isset($_SESSION['role'])) {

        echo '<img src="assets/image/babysitter1.jpg"  class="" alt="..." style="width:90px;height:60px;border-radius:50%;">';
      } else {
        // Display the "Logo"  
        echo '<img src="assets/image/babysitter1.jpg"  class="" alt="..." style="width:90px;height:60px;border-radius:50%;">';
      }
      ?>
      BabySitter</a>

    <?php
    if (isset($_SESSION['role'])) {

      echo ' <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
   <li class="nav-item  ">
     <a class="nav-link btn btn-dark" aria-current="page" href="index.php">Home</a>
   </li> 
   <li class="nav-item  ">
   <a class="nav-link btn btn-dark" aria-current="page" href="allbabysitter.php">Babysitters</a>
 </li> 
 <li class="nav-item  ">
 <a class="nav-link btn btn-dark" aria-current="page" href="services.php">Services</a>
</li> 
    
   <li class="nav-item  ">
     <a class="nav-link btn btn-dark" aria-current="page" href="about_us.php">About us</a>
   </li>  
   <li class="nav-item  ">
     <a class="nav-link btn btn-dark" aria-current="page" href="contact_us.php">Contact us</a>
   </li></ul> <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
   
  ';
    } else {
      // Display the "Logo"  
      echo ' <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
   <li class="nav-item  ">
     <a class="nav-link btn btn-dark" aria-current="page" href="index.php">Home</a>
   </li> 
   
    
   <li class="nav-item  ">
     <a class="nav-link btn btn-dark" aria-current="page" href="about_us.php">About us</a>
   </li>  
   <li class="nav-item  ">
     <a class="nav-link btn btn-dark" aria-current="page" href="contact_us.php">Contact us</a>
   </li></ul> <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
   
  ';
    }
    ?>



    <?php
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {




      // Display the "Logout" option
      echo  '<div class="btn btn-dark">' . $_SESSION['role'] . '</div>';
      echo '<li><a  class="nav-link btn btn-danger " href="logout.php">Logout</a></li>';
    } else if (isset($_SESSION['role']) && $_SESSION['role'] == 'babysitter') {
      echo  '<div class="btn btn-dark">' . $_SESSION['role'] . '</div>';
      echo '<li><a  class="nav-link btn btn-danger " href="logout.php">Logout</a></li>';
    } else if (isset($_SESSION['role']) && $_SESSION['role'] == 'ADMIN') {
      echo  '<div class="btn btn-dark">' . $_SESSION['role'] . '</div>';

      echo '<li><a  class="nav-link btn btn-danger " href="logout.php">Logout</a></li>';
    } else {

      echo '<li><a class="nav-link btn btn-dark " href="loginas.php">Login</a></li>';
      echo '<li><a class="nav-link btn btn-dark " href="registeras.php">Sign Up</a></li>';
    }
    ?>
    </ul>
  </nav>