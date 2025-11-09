<?php
require_once "header.php";
$page = 'View child enrollment';
$user_id = $_SESSION['user_id'];
?>


<?php


if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];

	deletchildenrollment($link, $id);
}
?>

<div class="main">

	<div class="container">
		<div>
			<a href="childenrollment.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add Child</a>
			<div>

				<table class="table " id="table">
					<thead>
						<tr>
						</tr>
					</thead>
					<thead>
						<tr>

							<th>Child Id</th>

							<th>Name</th>
							<th>Age</th>
							<th>Address</th>
							<th>Contact Number</th>
							<th>Emergency Contact Number</th>
							<th>Status</th>

							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$busSql = "Select * from child_enroll where user_id='$user_id'";
						$resultBusSql = mysqli_query($link, $busSql);
						$i = 1;
						while ($row = mysqli_fetch_assoc($resultBusSql)) {
							$id = $row['childenroll_id'];
							$age = $row['age'];
							$address = $row['address'];
							$contact_number = $row['contact_number'];
							$emergency_contact_number = $row['emergency_contact_number'];
							$name = $row['name'];
							$status = $row['status'];
							$i++;

						?>


							<tr>

								<td><?Php echo $id; ?></td>
								<td><?Php echo $name; ?></td>
								<td><?Php echo  $age; ?></td>
								<td><?Php echo  $address; ?></td>
								<td><?Php echo $contact_number; ?></td>
								<td><?Php echo $emergency_contact_number; ?></td>
								<td><?Php echo  $status; ?></td>

								<td>
									<a href="addstudent.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary" role="button">Edit</a>
								</td>
								<td>
									<a href="viewstudent.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" role="button">Delete</a>
								</td>
							</tr>
					</tbody>
				<?php
						}
				?>
			</div>
		</div>
	</div>
	</body>

	</html>