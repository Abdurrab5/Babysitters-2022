<?php


require_once "header.php";
$id = '';
$name = '';
$age = '';
$address = '';
$contact_number = '';
$emergency_contact_number = '';
$preferred_schedule = "";
$babysitter_id = "";
$user_id = "";


$status = '';
$msg = '';
?>
<?php



if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];






	$query = "SELECT * FROM child_enroll where childenroll_id='$id'   ";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['childenroll_id'];
		$name = $row['name'];
		$age = $row['age'];
		$address = $row['address'];
		$contact_number = $row['contact_number'];
		$emergency_contact_number = $row['emergency_contact_number'];
	 
		$user_id = $row['user_id'];
	}
}
// Connecting to the database
if (isset($_POST['submit'])) {

	// Retrieving form data and inserting into the database
	$name = $_POST['name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$contact_number = $_POST['contact_number'];
	$emergency_contact_number = $_POST['emergency_contact_number'];
	 
	 
	$user_id = $_POST['user_id'];

	$query = "UPDATE child_enroll SET name='$name',age='$age',address='$address',user_id='$user_id',contact_number='$contact_number',emergency_contact_number='$emergency_contact_number' where childenroll_id='$id'";

	$result = mysqli_query($link, $query);

	alert("enrollment updated successfuly.");

	redirect_to("admin_panel.php");
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
						<input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label>Age:</label>
						<input type="number" class="form-control" name="age" value="<?php echo $age; ?>" required>
					</div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label>Address:</label>
						<input type="text" class="form-control" name="address" value="<?php echo $address; ?>" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-4">
					<div class="form-group">
						<label>User ID:</label>
						<input type="text" class="form-control" name="user_id" value="<?php echo $user_id; ?>" required>
					</div>
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