<?php
require_once "header.php";
$page = 'View child enrollment';

?>


<?php


if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];

	deletservices($link, $id);
}
?>

<div class="main">

	<div class="container">
		<div>
			<a href="addservices.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add Service</a>
			<div>

				<table class="table " id="table">
					<thead>
						<tr>
						</tr>
					</thead>
					<thead>
						<tr>

							<th> Id</th>
							<th>Service Name</th>
							<th>Description</th>
							<th>Status</th>


							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$busSql = "Select * from services";
						$resultBusSql = mysqli_query($link, $busSql);
						$i = 1;
						while ($row = mysqli_fetch_assoc($resultBusSql)) {
							$id = $row['service_id'];
							$name = $row['name'];
							$description = $row['description'];
							$status = $row['status'];

							$i++;

						?>


							<tr>

								<td><?Php echo $id; ?></td>
								<td><?Php echo $name; ?></td>
								<td><?Php echo $description; ?></td>
								<td><?Php echo $status; ?></td>



								<td>
									<a href="addservices.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary" role="button">Edit</a>
								</td>
								<td>
									<a href="manage_services.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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