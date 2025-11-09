<?php
//require_once "navbar.php";
require_once "header.php";
?>









<!--Team-->
<div class="main">
	<div class="jumbotron bg-primary mt-4">
		<h2 class="text-white text-center">Services</h2>
		<div class="row">
			<?php

			$query = "SELECT * from services where status='Active' ";
			$result = mysqli_query($link, $query);
			$i = 0;
			while ($row = mysqli_fetch_assoc($result)) {
				$i++;
				$service_id = $row['service_id'];
				$name = $row['name'];
				$description = $row['description'];
				$rate_per_hour = $row['rate_per_hour'];


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

												echo $name;

												?></h1>
										</center>
										<p class="text-text "> Rate Per Hour : <?php echo $rate_per_hour; ?> </p>
										<p class="text-text "><?php echo $description; ?> </p </div><!--card-body  -->
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