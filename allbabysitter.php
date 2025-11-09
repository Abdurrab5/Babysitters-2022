<?php
//require_once "navbar.php";
require_once "header.php";
?>









<!--Team-->
<div class="main">
	<div class="jumbotron bg-primary mt-4">
		<h2 class="text-white text-center">Babysitters</h2>
		<div class="row">
			<?php
			$query = "SELECT userportfolio.*,user.username FROM userportfolio INNER JOIN user ON userportfolio.user_id=user.user_id ";

			$query = "SELECT babysitter.*,babysitter_services.* from babysitter Left JOIN babysitter_services ON babysitter.babysitter_id=babysitter_services.babysitter_id  ";
			$result = mysqli_query($link, $query);
			$j = 0;
			while ($row = mysqli_fetch_assoc($result)) {
				$j++;
				$babysitter_id = $row['babysitter_id'];
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$username = $row['username'];
				$email = $row['email'];
				$gender = $row['gender'];
				$phone = $row['phone'];
				$address = $row['address'];

				$rate_per_hour = $row['rate_per_hour'];
				$service_id = $row['service_id'];


			?>

				<div class="col-4">
					<div class="container">
						<div class="row mt-4">
							<div class="col text-center">
								<div class="card mt-2">
									<div class="card-body text-center">
										<div class=" ">

										</div>
										<center>
											<h1><?php

												echo $username;

												?></h1>
										</center>
										<p class="text-text ">First Name: <?php echo $first_name; ?> </p>
										<p class="text-text "> Last Name: <?php echo $last_name; ?> </p>
										<p class="text-text ">Email: <?php echo $email; ?> </p>
										<p class="text-text ">Address: <?php echo $address; ?> </p>
										<p class="text-text ">Service: <?php echo $service_id; ?> </p>
										<p class="text-text ">Rate Per Hour: <?php echo $rate_per_hour; ?> </p>


									</div><!--card-body  -->
								</div><!-- card -->
							</div><!--col  -->
						</div>

					</div>
				</div><!--col  -->

			<?php

			}
			?>
		</div>
	</div>