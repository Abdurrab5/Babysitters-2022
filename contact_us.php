<?php


require_once "header.php";

?>




<!DOCTYPE html>
<html>

<head>
	<title>Contact Us - Babysitter Web Application</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}

		h1 {
			font-size: 36px;
			margin-bottom: 20px;
			text-align: center;
		}

		form {
			background-color: rgba(65, 61, 61, 0.5);
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			margin-bottom: 20px;
			color: lightblue;
		}

		input {
			border: none;
			background: none;
		}

		label {
			display: block;
			font-size: 18px;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="email"],
		textarea {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			border: 2px solid #cccccc;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #ffffff;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>

<body style="background-image: url('assets/image/user1.jpeg'); background-size:cover; ">


	<?php

	$cont_id = "";
	$name = "";
	$email = "";
	$user_id = "";
	$message = "";
	$reply = "";

	if (isset($_GET['id']) && $_GET['id'] != '') {
		$cont_id = $_GET["id"];
	}

	if ($cont_id > 0) {
		$query = "SELECT * FROM contactus where cont_id='$cont_id'   ";
		$result = mysqli_query($link, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$cont_id = $row['cont_id'];
			$name = $row['name'];
			$user_id = $row['user_id'];
			$message = $row['message'];
			$reply = $row['reply'];

			$email = $row['email'];
		}
	} else {

		$cont_id = "";
		$name = "";
		$email = "";
		$user_id = "";
		$message = "";
		$reply = "";
	}






	$msg = '';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		if ($cont_id > 0) {

			$reply = $_POST['reply'];

			$query = "update contactus set reply='$reply' where cont_id='$cont_id'";

			$result = mysqli_query($link, $query);
			alert("Reply successfuly.");

			redirect_to("admin_panel.php");
		} else {



	?>
			<div class="main">
		<?php






			$user_id = $_SESSION['user_id'];
			$query = "INSERT into contactus(user_id,name,email,message,reply) VALUES";
			$query .= "('$user_id','$name','$email','$message','')";
			$result = mysqli_query($link, $query);
			if (mysqli_insert_id($link)) {
				alert("emaiil send successfuly.");

				redirect_to("user_panel.php");
			} else {
				$msg = "error";
			}
		}
	}


		?>

		<div class="container">
			<h1>Contact Us</h1>
			<form action="#" method="POST">

				<div class="form-group">
					<label for="name"> Name:</label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required="" Placeholder=" Name:">
				</div>


				<div class="form-group">
					<label for="name">email:</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required="" Placeholder="Email:">
				</div>

				<div class="form-group">
					<label for="name"> Message:</label>
					<input type="text" class="form-control" id="message" name="message" value="<?php echo $message; ?>" required="">
				</div>



				<?php
				if ($cont_id > 0) {

				?>
					<div class="form-group">
						<label for="message">Reply:</label>
						<input type="text" class="form-control" id="message" name="reply" value="<?php echo $reply; ?>" required>

					</div>
					<div class="form-group">
						<label for="name">email:</label>
						<input type="text" class="form-control" id="user_id" name="user_id" value="<?php echo $user_id; ?>" required="" Placeholder="Email:">
					</div>
				<?php
				}
				?>

				<input type="submit" class="btn btn-primary" value="submit" name="submit" id="submit" />
			</form>
		</div>
</body>

</html>