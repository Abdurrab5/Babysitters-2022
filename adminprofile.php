<?php
//require_once "navbar.php";
require_once "header.php";
$id = "";
$username = "";
$email = "";
$password = "";

$id = $_SESSION['id'];


$query = "SELECT * FROM admin where id='$id'   ";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['id'];

  $username = $row['username'];
  $email = $row['email'];
  $password = $row['password'];
}



?>



<body style="background-image: url('assets/image/babysitter1.jpg'); background-size:cover; ">

  <div>



    <?php
    $msg = '';
    if (isset($_POST['submit'])) {

      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];



      $query = "update admin set  username='$username',email='$email',password='$password'  where id='$id'";

      $result = mysqli_query($link, $query);
      alert("admin profile update successfuly.");

      redirect_to("admin_panel.php");
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
          <div class="col">
            <div class="form-group">
              <label for="name">User Name:</label>
              <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required="" Placeholder="username:">
            </div>

          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">e-Mail:</label>
                <input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $email; ?>" Placeholder="Enter e-Mail add:">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="name">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $password; ?>" Placeholder="Enter password:">
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

</body>




</html>