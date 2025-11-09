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
	<div class="container">
		<h1>Contact Us</h1>
		<form action="#" method="POST">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="message">Message:</label>
			<textarea id="message" name="message" rows="5" required></textarea>

			<input type="submit" value="Send">
		</form>
	</div>
</body>

</html>