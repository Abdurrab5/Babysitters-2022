<?php
//require_once "navbar.php";
require_once "header.php";


$schedule_id = "";
$service_type = "";
$start_time = "";
$end_time = "";
$babysitter_id = $_SESSION['babysitter_id'];
$status = "";

if (isset($_GET['id']) && $_GET['id'] != '') {
  $schedule_id = $_GET["id"];
}

if ($schedule_id > 0) {
  $query = "SELECT * FROM babysitter_schedule where schd_id='$schedule_id'   ";
  $result = mysqli_query($link, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $schedule_id = $row['schd_id'];
    $service_type = $row['service_type'];
    $start_time = $row['start_time'];
    $status = $row['status'];
    $end_time = $row['end_time'];
    $babysitter_id = $row['babysitter_id'];
  }
} else {

  $schedule_id = "";
  $service_type = "";
  $start_time = "";
  $end_time = "";

  $status = "";
}



?>



<body style="background-image: url('assets/image/babysitter1.jpg'); background-size:cover; ">

  <div>



    <?php
    $msg = '';
    if (isset($_POST['submit'])) {
      $service_type = $_POST['service_type'];
      $start_time = $_POST['start_time'];
      $end_time = $_POST['end_time'];


      if ($schedule_id > 0) {

        $status = $_POST['status'];

        $query = "update babysitter_schedule set service_type='$service_type',start_time='$start_time',end_time='$end_time',status='$status' where schd_id='$schedule_id'";

        $result = mysqli_query($link, $query);
        alert("schedule update successfuly.");

        redirect_to("babysitter_panel.php");
      } else {

        $sql_check = "SELECT * FROM babysitter_schedule WHERE babysitter_id = '$babysitter_id'";
        $result_check = $link->query($sql_check);

        if ($result_check->num_rows > 0) {
          $msg = " Schedule for ID'$babysitter_id' already exists!";
        } else {
          /*  $query="SELECT * FROM babysitter_schedule where babysitter_id='$babysitter_id'   ";
        $result= mysqli_query($link,$query);
           while( $row=mysqli_fetch_assoc($result)){
            $schedule_id=$row['schedule_id'];
            $dayof=$row['day_of_week'];
             
             $baby_id=$row['babysitter_id'];
    
             if($baby_id>0 && $dayof==$day_of_week ){

              $msg='You Already Select This Day';
             }else{

              */



          $query = "INSERT into babysitter_schedule(babysitter_id,service_type,start_time,end_time,status) VALUES";
          $query .= "('$babysitter_id','$service_type','$start_time','$end_time','Available')";
          $result = mysqli_query($link, $query);


          if (mysqli_insert_id($link)) {
            alert("Schedule added successfuly.");

            redirect_to("babysitter_panel.php");
          } else {
            $msg = "Schedule already exist";
          }
        }
      }
    }
    //}
    ?>

    <br>
    <br>
    <div class="container">

    </div>
    <div class="container" id="form">


      <h3> Add Schedule</h3>


      <form action="" method="POST">

        <div class="form-group">
          <label for="name"> Service Type:</label>


          <select name="service_type" id="service_type">
            <option value="<?php echo $service_type; ?>"><?php echo $service_type; ?></option>

            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>




          </select>
        </div>


        <div class="form-group">
          <label for="name">Start Time:</label>
          <input type="time" class="form-control" id="start_time" name="start_time" value="<?php echo $start_time; ?>" required="" Placeholder="start Time:">
        </div>

        <div class="form-group">
          <label for="name">End Time:</label>
          <input type="time" class="form-control" id="end_time" name="end_time" value="<?php echo $end_time; ?>" required="" Placeholder="End Time:">
        </div>
        <?php
        if ($schedule_id > 0) {
        ?>
          <div class="form-group">
            <label for="status">Select Status:</label>



            <select name="status" id="status">
              <option value="<?php echo $status; ?>"><?php echo $status; ?></option>

              <option value="Available">Available</option>
              <option value="Notavailable">Notavailable</option>
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

</body>




</html>