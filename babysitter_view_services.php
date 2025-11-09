<?php
require_once "header.php";


?>


<?php
$babysitter_id = $_SESSION['babysitter_id'];




if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];

	deletschedule($link, $id);
}
?>

<div class="main">

	<div class="container">
		<div>
			<a href="babysitter_add_services.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add Services</a>


			<table class="table " id="table">
				<thead>
					<tr>
					</tr>
				</thead>
				<thead>
					<tr>

						<th> Babysitter services Id</th>

						<th>Babysitter ID</th>
						<th>Rate Per Hour</th>
						<th>Service </th>




						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$busSql = "Select * from babysitter_services where babysitter_id='$babysitter_id' ";
					$resultBusSql = mysqli_query($link, $busSql);
					$i = 1;
					while ($row = mysqli_fetch_assoc($resultBusSql)) {
						$id = $row['baby_service_id'];
						$babysitter_id = $row['babysitter_id'];
						$service_id = $row['service_id'];
						$rate_per_hour = $row['rate_per_hour'];


						$i++;

					?>


						<tr>

							<td><?Php echo $id; ?></td>
							<td><?Php echo $babysitter_id; ?></td>
							<td><?Php echo  $rate_per_hour; ?></td>
							<td><?Php echo  $service_id; ?></td>




							<td>
								<a href="babysitter_add_services.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary" role="button">Edit</a>
							</td>
							<td>
								<a href="babysitter_view_services.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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