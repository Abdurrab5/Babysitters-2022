<?php
//require_once "navbar.php";

require_once "header.php";

$babysitter_id = $_SESSION['babysitter_id'];

$baby_service_id = "";
$babysitter_id = "";
$service_id = "";
$rate_per_hour = "";

if (isset($_GET['id']) && $_GET['id'] != '') {
  $baby_service_id = $_GET["id"];
}

if ($baby_service_id > 0) {
  $query = "SELECT * FROM babysitter_services where baby_service_id='$baby_service_id'   ";
  $result = mysqli_query($link, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $baby_service_id = $row['baby_service_id'];
    $babysitter_id = $row['babysitter_id'];
    $service_id = $row['service_id'];
    $rate_per_hour = $row['rate_per_hour'];
  }
} else {


  $baby_service_id = "";
  $babysitter_id = "";
  $service_id = "";
  $rate_per_hour = "";
}



?>



<body style="background-image: url('assets/image/babysitter1.jpg'); background-size:cover; ">

  <div>



    <?php
    $msg = '';
    if (isset($_POST['submit'])) {


      $service_id = $_POST['service_id'];
      $rate_per_hour = $_POST['rate_per_hour'];

      if ($baby_service_id > 0) {



        $query = "update babysitter_services set rate_per_hour='$rate_per_hour',service_id='$service_id'  where baby_service_id='$baby_service_id'";

        $result = mysqli_query($link, $query);


        alert("schedule update successfuly.");

        redirect_to("babysitter_view_services.php");
      } else {





        $query = "INSERT into babysitter_services(babysitter_id,rate_per_hour,service_id) VALUES";
        $query .= "('$babysitter_id','$rate_per_hour','$service_id')";
        $result = mysqli_query($link, $query);


        if (mysqli_insert_id($link)) {
          alert("Schedule added successfuly.");

          redirect_to("babysitter_view_services.php");
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


      <h3> Add Service</h3>


      <form action="" method="POST">

        <div class="form-group">
          <label for="name"> Service ID:</label>


          <select name="service_id" id="service_id">
            <option value="<?php echo $service_id; ?>"><?php echo $service_id; ?></option>

            <?php
            $sql = "Select * from services  ";
            $resultSql = mysqli_query($link, $sql);
            $i = 1;
            while ($row = mysqli_fetch_assoc($resultSql)) {

              $service_id = $row['service_id'];

            ?>
              <option value='<?php echo $service_id;  ?>'><?php echo $service_id;  ?></option>


            <?php


            }

            ?>






          </select>
        </div>


        <div class="form-group">
          <label for="name">Rate Per Hour:</label>
          <input type="text" class="form-control" id="rate_per_hour" name="rate_per_hour" value="<?php echo $rate_per_hour; ?>" required="" Placeholder=":">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Click to Add Service" name="submit" id="submit" />
          <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset" />
          <div class="field_error"><?php echo $msg ?></div>
        </div>
      </form>
    </div>

</body>




</html>