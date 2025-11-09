<?php


require_once "header.php";
$user_id = $_SESSION['user_id'];
$name = '';
$age = '';
$address = '';
$contact_number = '';
$emergency_contact_number = '';
$msg = '';
?>
<?php
// Connecting to the database
if (isset($_POST['submit'])) {

	// Retrieving form data and inserting into the database
	$name = $_POST['name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$contact_number = $_POST['contact_number'];
	$emergency_contact_number = $_POST['emergency_contact_number'];

	$query = "INSERT INTO child_enroll(name,age,address,contact_number,emergency_contact_number,user_id,status) VALUES";
	$query .= "('$name','$age','$address','$contact_number','$emergency_contact_number','$user_id','Pending')";

	$result = mysqli_query($link, $query);
	if (mysqli_insert_id($link)) {
		alert("baby  registered successfuly.");

		redirect_to("user_panel.php");
	} else {
		$msg = "user already exist";
	}
}

?>



<!DOCTYPE html>
<html>

<head>
	<title>Child Enrollment Form</title>
</head>

<body>


	<div class="container" id="form">
		<h3> Child Enrolment Form</h3>
		<form action="" method="POST">
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" class="form-control" name="name" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label>Age:</label>
						<input type="number" class="form-control" name="age" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label>Address:</label>
						<input type="text" class="form-control" name="address" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label>Contact Number:</label>
						<input type="number" class="form-control" name="contact_number" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label>Emergency Contact Number:</label>
						<input type="number" class="form-control" name="emergency_contact_number" required>
					</div>
				</div>
				<div class="row">
					<div>
						<input type="submit" class="btn btn-primary" value="Click to Register" name="submit" id="submit" />
						<input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset" />
						<div class="field_error"><?php echo $msg ?>
						</div>
					</div>
				</div>
		</form>
	</div>