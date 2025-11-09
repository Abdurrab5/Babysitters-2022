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
			<a href="babysitter_add_schedule.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add Schedule</a>


			<table class="table " id="table">
				<thead>
					<tr>
					</tr>
				</thead>
				<thead>
					<tr>

						<th>schedule Id</th>

						<th>Service Type</th>
						<th>Start Time</th>
						<th>End Time</th>


						<th>Status</th>

						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php

					$busSql = "Select * from babysitter_schedule where babysitter_id='$babysitter_id' ";
					$resultBusSql = mysqli_query($link, $busSql);
					$i = 1;
					while ($row = mysqli_fetch_assoc($resultBusSql)) {
						$id = $row['schd_id'];
						$babysitter_id = $row['babysitter_id'];
						$service_type = $row['service_type'];
						$start_time = $row['start_time'];
						$end_time = $row['end_time'];
						$status = $row['status'];

						$i++;

					?>


						<tr>

							<td><?Php echo $id; ?></td>
							<td><?Php echo $service_type; ?></td>
							<td><?Php echo  $start_time; ?></td>
							<td><?Php echo  $end_time; ?></td>



							<td><?Php echo  $status; ?></td>

							<td>
								<a href="babysitter_add_schedule.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary" role="button">Edit</a>
							</td>
							<td>
								<a href="babysitter_schedule.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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