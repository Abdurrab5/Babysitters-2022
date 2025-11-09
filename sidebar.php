<?php

$header = "";





?>




<body>

	<div class="sidebar">
		<?php


		if (isset($_SESSION['role']) && $_SESSION['role'] != "") {

			$header = $_SESSION['role'];
		}
		if ($header == 'user') {

		?>



			<a href="user_panel.php"><i class="fa-solid fa-gauge"></i> Dashbord</a>
			<a href="childenrollment.php"><i class="fa-solid fa-people-roof"></i> Enroll Child</a>
			<a href="viewchild_user.php"><i class="fa-solid fa-people-roof"></i>View child enrollment</a>
			<a href="mymessages.php"><i class="fa-sharp fa-solid fa-flask-vial"></i>Messages</a>
			<a href="user_view_hirebabysitter.php"><i class="fa-sharp fa-solid fa-flask-vial"></i>Hire Babysitter</a>


		<?php
		} elseif ($header == 'ADMIN') { ?>


			<a href="admin_panel.php"><i class="fa-solid fa-gauge"></i> Dashbord</a>
			<a href="adminprofile.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a>

			<a href="manage_babysitter.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Manage babysitter</a>
			<a href="manage_services.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Manage services</a>
			<a href="manage_user.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Manage User</a>
			<a href="admin_view_request.php"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>Manage Enrollment</a>
			<a href="manage_mail.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Messages </a>




		<?php


		} elseif ($header == 'babysitter') { ?>


			<a href="babysitter_panel.php"><i class="fa-solid fa-gauge"></i> Dashbord</a>
			<a href="babysitterprofile.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a>
			<a href="babysitter_view_services.php"><i class="fa fa-user-circle" aria-hidden="true"></i>services</a>
			<a href="babysitter_view_request.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Enrollment</a>
			<a href="babysitter_schedule.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Schedule</a>
			<a href="babysitter_schedule.php"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
			 



		<?php


		}

		?>





	</div>