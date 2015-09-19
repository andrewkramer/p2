<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/favicon.png"/>
		<title>DWA15 Project 2</title>

		<!-- Import Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Import my custom CSS -->
		<link href="css/custom.css" rel="stylesheet">
		
		<?php require 'logic.php'; ?>
	</head>
	<body>
		<div class="container">
			<header class="row">
				<div class="col-md-12">
					<h1>xkcd Password Generator</h1>
				</div>
			</header>
			
			<main class="row">
				<div class="col-md-12">
					<h2><?= $password ?></h2>
					<small>Refresh the page to generate another.</small>
				</div>
				<div class="col-md-12">
					<h3>Background</h3>
					<p>xkcd passwords are easier to remember and more secure that standard passwords. Use them.</p>
				</div>
			</main>
			
			<footer class="row">
				<p class="col-md-12">Copyright &copy; 2015 Andrew Kramer</p>
			</footer>
		</div>
		<!-- Import jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Import Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>