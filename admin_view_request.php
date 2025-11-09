<?php
require_once "header.php";
$page = 'View hire babysitter';
 
?>


<?php


if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET["id"];
	$rtSql = "Delete from  hirebabysitter  swhere hire_id='$id' ";
	$resultrtSql = mysqli_query($link, $rtSql);
	 
	 
	  
	   redirect_to("admin_view_request.php");
}


//  code for accept request when click on button accept
if (isset($_GET['pending']) && $_GET['pending'] != '') {
	$id = $_GET["pending"];

	$rtSql = "update hirebabysitter set status='Accepted' where hire_id='$id' ";
	$resultrtSql = mysqli_query($link, $rtSql);
	 
	 
	  
	   redirect_to("admin_view_request.php");
}

// code to change status from accepted to pending when click on pending button
if (isset($_GET['accepted']) && $_GET['accepted'] != '') {
	$id = $_GET["accepted"];

	$rtSql = "update hirebabysitter set status='Pending' where hire_id='$id' ";
	$resultrtSql = mysqli_query($link, $rtSql);
	 
	 
	  
	   redirect_to("admin_view_request.php");
}
// code to reject the request when click on reject buton
if (isset($_GET['rejected']) && $_GET['rejected'] != '') {
	$id = $_GET["rejected"];

	$rtSql = "update hirebabysitter set status='Rejected' where hire_id='$id' ";
	$resultrtSql = mysqli_query($link, $rtSql);
	 
	 
	  
	   redirect_to("admin_view_request.php");
}
?>

<div class="main">

	<div class="container">
		

				<table class="table " id="table">
					<thead>
						<tr>
						</tr>
					</thead>
					<thead>
						<tr>

							<th>Hire Id</th>

							<th>Child </th>
							<th>User </th>
							<th>Status</th>
							 

							<th>Update</th>
							<th>Cancel</th>
							<th>Delete Permanantly</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$busSql = "Select * from hirebabysitter ";
						$resultBusSql = mysqli_query($link, $busSql);
						$i = 1;
						while ($row = mysqli_fetch_assoc($resultBusSql)) {
							$id = $row['hire_id'];
							$user_id = $row['user_id'];
							$child_id = $row['child_id'];
							 
							$status = $row['status'];
							$i++;

						?>


							<tr>

								<td><?Php echo $id; ?></td>
								<td><?Php echo  childname($link,$child_id); ?></td>
								
								<td><?Php echo username($link,$user_id) ; ?></td>
								 
								<td><?Php echo  $status; ?></td>
<?php
			if($status=='Pending'){
				?>
<td>
									<a href="admin_view_request.php?pending=<?php echo $id; ?>" class="btn btn-sm btn-success" role="button">Accept</a>
								</td>
			<?php	
			}elseif($status=='Accepted'){
?>
<td>
									<a href="admin_view_request.php?accepted=<?php echo $id; ?>" class="btn btn-sm btn-warning" role="button">Pending</a>
								</td>

<?php
			}elseif($status=='Rejected'){
				?>
				<td>
													<a href="admin_view_request.php?pending=<?php echo $id; ?>" class="btn btn-sm btn-success" role="button">Accept</a>
												</td>
				
				<?php
							}
				?>				
						<td><a href="admin_view_request.php?rejected=<?php echo $id; ?>" class="btn btn-sm btn-Danger" role="button">Rejected</a>
							</td>	
							<td><a href="admin_view_request.php?id=<?php echo $id; ?>" class="btn btn-sm btn-Danger" role="button">Delete</a>
							</td>	 
							</tr>
					</tbody>
				<?php
						}

						function username($link,$user_id){
							$stSql = "Select * from user where user_id='$user_id' ";
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