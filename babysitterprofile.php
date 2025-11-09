<?php
//require_once "navbar.php";
require_once "header.php";
$id = "";
$fname = "";
$lname = "";
$username = "";
$email = "";
$password = "";
$phone = "";
$address = "";
$gender = "";
$babysitter_id = $_SESSION['babysitter_id'];


$query = "SELECT * FROM babysitter where babysitter_id='$babysitter_id'   ";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['babysitter_id'];
  $fname = $row['first_name'];
  $lname = $row['last_name'];
  $username = $row['username'];
  $email = $row['email'];
  $password = $row['password'];
  $phone = $row['phone'];
  $address = $row['address'];
  $gender = $row['gender'];
}



?>



<body style="background-image: url('assets/image/babysitter1.jpg'); background-size:cover; ">

  <div>



    <?php
    $msg = '';
    if (isset($_POST['submit'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];



      $query = "update babysitter set first_name='$fname',last_name='$lname',username='$username',email='$email',password='$password',address='$address',gender='$gender',phone='$phone' where babysitter_id='$babysitter_id'";

      $result = mysqli_query($link, $query);
      alert("user update successfuly.");

      redirect_to("babysitter_panel.php");
    }

    ?>

    <br>
    <br>
    <div class="container">

    </div>
    <div class="container" id="form">


      <h3> Babysitter Profile</h3>


      <form action="" method="POST">
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="name">User Name:</label>
              <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required="" Placeholder="username:">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="name">First Name:</label>
              <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" required="" Placeholder="username:">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="name">Last Name:</label>
              <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" required="" Placeholder="username:">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="name">e-Mail:</label>
              <input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $email; ?>" Placeholder="Enter e-Mail add:">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="name">Password:</label>
              <input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $password; ?>" Placeholder="Enter password:">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="phone">phone:</label>
              <input type="text" class="form-control" id="phone" name="phone" required="" value="<?php echo $phone; ?>" Placeholder="03001234567:">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="name">address:</label>
              <input type="text" class="form-control" id="address" name="address" required="" value="<?php echo $address; ?>" Placeholder="03001234567:">

            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="gender">Gender:</label>
              <div class="form-check">
                <?php if ($id > 0) {
                  if ($gender == 'male') {
                    echo ' <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male
     <br>
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female';
                  } else {
                    echo ' <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" >Male
     <br>
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female" checked>Female';
                  }
                } else { ?>
                  <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male
                  <br>
                  <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Click to Update" name="submit" id="submit" />
        <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset" />
        <div class="field_error"><?php echo $msg ?></div>
    </div>
    </form>
  </div>
  <a href="../index.php" style="float:left; ">back</a>

</body>




</html>