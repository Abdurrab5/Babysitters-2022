<?php
require_once "header.php";
$page = 'View child enrollment';

?>


<?php


if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];

	deletuser($link, $id);
}
?>

<div class="main">

	<div class="container">
		<div>
			<a href="userregister.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add User</a>
			<div>

				<table class="table " id="table">
					<thead>
						<tr>
						</tr>
					</thead>
					<thead>
						<tr>

							<th> Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>User Name</th>
							<th>Gender</th>
							<th>Email</th>
							<th>Password</th>
							<th>Address</th>
							<th>Phone</th>



							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$busSql = "Select * from user";
						$resultBusSql = mysqli_query($link, $busSql);
						$i = 1;
						while ($row = mysqli_fetch_assoc($resultBusSql)) {
							$id = $row['user_id'];
							$fname = $row['first_name'];
							$lname = $row['last_name'];
							$username = $row['username'];
							$email = $row['email'];
							$password = $row['password'];
							$phone = $row['phone'];
							$address = $row['address'];
							$gender = $row['gender'];
							$i++;

						?>


							<tr>

								<td><?Php echo $id; ?></td>
								<td><?Php echo $fname; ?></td>
								<td><?Php echo $lname; ?></td>
								<td><?Php echo $username; ?></td>
								<td><?Php echo $gender; ?></td>
								<td><?Php echo $email; ?></td>
								<td><?Php echo  $password; ?></td>
								<td><?Php echo  $address; ?></td>
								<td><?Php echo $phone; ?></td>


								<td>
									<a href="userregister.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary" role="button">Edit</a>
								</td>
								<td>
									<a href="manage_user.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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