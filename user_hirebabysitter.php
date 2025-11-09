<?php
//require_once "navbar.php";
require_once "header.php";


$hire_id = "";
$babysitter_id = "";
$child_id = "";

$user_id = $_SESSION['user_id'];
$status = "";

if (isset($_GET['id']) && $_GET['id'] != '') {
  $hire_id = $_GET["id"];
}

if ($hire_id > 0) {
  $query = "SELECT * FROM hirebabysitter where hire_id='$hire_id'   ";
  $result = mysqli_query($link, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $hire_id = $row['hire_id'];
    $child_id = $row['child_id'];
    $babysitter_id = $row['babysitter_id'];
    $status = $row['status'];
  }
} else {

  $hire_id = "";
  $babysitter_id = "";
  $child_id = "";


  $status = "";
}



?>



<body style="background-image: url('assets/image/babysitter1.jpg'); background-size:cover; ">

  <div>



    <?php
    $msg = '';
    if (isset($_POST['submit'])) {
      $child_id = $_POST['child_id'];
      $babysitter_id = $_POST['babysitter_id'];


      if ($hire_id > 0) {



        $query = "update hirebabysitter set child_id='$child_id',babysitter_id='$babysitter_id'  where hire_id='$hire_id'";

        $result = mysqli_query($link, $query);
        alert("babysitter hiring update successfuly.");

        redirect_to("user_panel.php");
      } else {


        $query = "INSERT into hirebabysitter(user_id,child_id,babysitter_id,status) VALUES";
        $query .= "('$user_id','$child_id','$babysitter_id','Pending')";
        $result = mysqli_query($link, $query);


        if (mysqli_insert_id($link)) {
          alert("Babysitter Hired successfuly.");

          redirect_to("user_panel.php");
        } else {
          $msg = " already exist";
        }
      }
    }

    ?>

    <br>
    <br>
    <div class="container">

    </div>
    <div class="container" id="form">


      <h3> Hire Babysitter</h3>


      <form action="" method="POST">

        <div class="form-group">
          <label for="name"> Select Child:</label>



          <select name="child_id" id="child_id">
           
            <option value="<?php echo $child_id; ?>"><?php echo $child_id; ?></option>



            <?php



            $query = "Select * From child_enroll where user_id='$user_id' ";
            $result = mysqli_query($link, $query);
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $i++;

            ?>
              <option value=" <?php echo $row['childenroll_id']; ?>"><?php echo $row['childenroll_id']; ?></option>

            <?php
            }

            ?>


          </select>
        </div>


        <div class="form-group">
          <label for="babysitter">Select Babysitter:</label>



          <select name="babysitter_id" id="babysitter_id">
            <option value="<?php echo $babysitter_id; ?>"><?php echo $babysitter_id; ?></option>
            <?php
            $query = "Select * From babysitter";
            $result = mysqli_query($link, $query);
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $i++;

            ?>
              <option value=" <?php echo $row['babysitter_id']; ?>"><?php echo $row['babysitter_id']; ?></option>

            <?php
            }
            ?>


          </select>
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