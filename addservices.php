<?php
//require_once "navbar.php";
require_once "header.php";


$service_id = "";
$name = "";
$description = "";
$status = "";

if (isset($_GET['id']) && $_GET['id'] != '') {
  $service_id = $_GET["id"];
}

if ($service_id > 0) {
  $query = "SELECT * FROM services where service_id='$service_id'   ";
  $result = mysqli_query($link, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $service_id = $row['service_id'];
    $name = $row['name'];
    $description = $row['description'];
    $status = $row['status'];
  }
} else {

  $service_id = "";
  $name = "";
  $description = "";
  $status = "";
}



?>



<body style="background-image: url('assets/image/babysitter1.jpg'); background-size:cover; ">

  <div>



    <?php
    $msg = '';
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $description = $_POST['description'];


      if ($service_id > 0) {

        $status = $_POST['status'];

        $query = "update services set name='$name',description='$description',status='$status' where service_id='$service_id'";

        $result = mysqli_query($link, $query);
        alert("services update successfuly.");

        redirect_to("admin_panel.php");
      } else {
        $query ="INSERT into services(name,description,status) VALUES";
        $query .="('$name','$description','Active')";
        $result = mysqli_query($link, $query);
        
        if (mysqli_insert_id($link)) {
          alert("service added successfuly.");

          redirect_to("admin_panel.php");
        } else {
          $msg = "Service already exist";
        }
      }
    }
    ?>

    <br>
    <br>
    <div class="container">

    </div>
    <div class="container" id="form">


      <h3> Add Services</h3>


      <form action="" method="POST">

        <div class="form-group">
          <label for="name"> Service Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required="" Placeholder="Service Name:">
        </div>


        <div class="form-group">
          <label for="name">Description:</label>
          <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>" required="" Placeholder="Description:">
        </div>
        <?php
        if ($service_id > 0) {
        ?>
          <div class="form-group">
            <label for="status">Select Status:</label>



            <select name="status" id="status">
              <option value="<?php echo $status; ?>"><?php echo $status; ?></option>

              <option value="Active">Active</option>
              <option value="Deactive">Deactivate</option>
            </select>
          </div>
        <?php } ?>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Click to Add Service" name="submit" id="submit" />
          <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset" />
          <div class="field_error"><?php echo $msg ?></div>
        </div>
      </form>
    </div>
    <a href="../index.php" style="float:left; ">back</a>

</body>




</html>