<?php
require_once "header.php";
$page = 'manage mail';

?>


<?php


if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];

	deletmail($link, $id);
}
?>

<div class="main">

	<div class="container">
		<div>

			<div>

				<table class="table " id="table">
					<thead>
						<tr>
						</tr>
					</thead>
					<thead>
						<tr>

							<th> Mail Id</th>
							<th> User Id</th>
							<th>User Name</th>
							<th>Mail</th>
							<th>Message</th>
							<th>Reply</th>


							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$busSql = "Select * from contactus";
						$resultBusSql = mysqli_query($link, $busSql);
						$i = 1;
						while ($row = mysqli_fetch_assoc($resultBusSql)) {
							$id = $row['cont_id'];
							$name = $row['name'];
							$user_id = $row['user_id'];
							$message = $row['message'];
							$email = $row['email'];
							$reply = $row['reply'];
							$i++;

						?>


							<tr>

								<td><?Php echo $id; ?></td>
								<td><?Php echo $user_id; ?></td>
								<td><?Php echo $name; ?></td>
								<td><?Php echo $email; ?></td>
								<td><?Php echo $message; ?></td>
								<td><?Php echo $reply; ?></td>



								<td>
									<a href="contact_us.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary" role="button">Edit</a>
								</td>
								<td>
									<a href="manage_mail.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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