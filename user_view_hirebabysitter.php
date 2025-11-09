<?php
require_once "header.php";
$page = 'View hire babysitter';
$user_id = $_SESSION['user_id'];
?>


<?php


if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];

	//deletchildenrollment($link, $id);
}
?>

<div class="main">

	<div class="container">
		<div>
			<a href="user_hirebabysitter.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Hire Babysitter</a>
			<div>

				<table class="table " id="table">
					<thead>
						<tr>
						</tr>
					</thead>
					<thead>
						<tr>

							<th>Hire Id</th>

							<th>Child </th>
							<th>Babysitter</th>
							<th>Status</th>
							 

							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$busSql = "Select * from hirebabysitter where user_id='$user_id'";
						$resultBusSql = mysqli_query($link, $busSql);
						$i = 1;
						while ($row = mysqli_fetch_assoc($resultBusSql)) {
							$id = $row['hire_id'];
							$babysitter_id = $row['babysitter_id'];
							$child_id = $row['child_id'];
							 
							$status = $row['status'];
							$i++;

						?>


							<tr>

								<td><?Php echo $id; ?></td>
								<td><?Php echo  childname($link,$child_id); ?></td>
								
								<td><?Php echo babsittername($link,$babysitter_id) ; ?></td>
								 
								<td><?Php echo  $status; ?></td>

								<td>
									<a href="user_hirebabysitter.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary" role="button">Edit</a>
								</td>
								<td>
									<a href="user_view_hirebabysitter.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" role="button">Delete</a>
								</td>
							</tr>
					</tbody>
				<?php
						}

						function babsittername($link,$babysitter_id){
							$stSql = "Select * from babysitter where babysitter_id='$babysitter_id' ";
							$resultstSql = mysqli_query($link, $stSql);
							 $i=0;
							 while($row=mysqli_fetch_assoc($resultstSql)){
								$i++;
								$user_name=$row['username'];
								 
							 }
							 return $user_name;
							 
							}
							
						function childname($link,$child_id){
							$stSql = "Select * from child_enroll where childenroll_id='$child_id' ";
							$resultstSql = mysqli_query($link, $stSql);
							 $i=0;
							 while($row=mysqli_fetch_assoc($resultstSql)){
								$i++;
								$user_name=$row['name'];
								 
							 }
							 return $user_name;
							 
							}
				?>
			</div>
		</div>
	</div>
	</body>

	</html>