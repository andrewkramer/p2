<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/favicon.png"/>
		<title>DWA15 Project 2</title>

		<!-- Import Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Trade+Winds' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
		
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
				<div class="password col-md-12">
					<h2><?= $password ?></h2>
					<small>Refresh the page to generate another.</small>
				</div>
				<div class="col-md-offset-3 col-md-6">
					<form class="form-horizontal" method="get">
						<div class="form-group">
							<label for="wordCount" class="col-md-6 control-label">Words: </label>
							<input id="wordCount" class="form-control" type="number" name="wordCount">
						</div>
						<div class="form-group">
							<label for="separator" class="col-md-6 control-label">Separator: </label>
							<input id="separator" class="form-control" type="text" name="separator">
						</div>
						<div class="form-group">
							<label for="symbols" class="col-md-6 control-label">Symbols: </label>
							<input id="symbols" class="form-control" type="number" name="symbols">
						</div>
						<div class="form-group">
							<label for="symbolLocationRandom" class="col-md-6 control-label">Random Placment: </label>
							<input id="symbolLocationRandom" class="form-control" type="checkbox" name="symbolLocationRandom" value="1">
						</div>
						<div class="form-group">
							<label for="numbers" class="col-md-6 control-label">Numbers: </label>
							<input id="numbers" class="form-control" type="number" name="numbers">
						</div>
						<div class="form-group">
							<label for="numberLocationRandom" class="col-md-6 control-label">Random Placement: </label>
							<input id="numberLocationRandom" class="form-control" type="checkbox" name="numberLocationRandom" value="1">
						</div>
						<div class="form-group">
							<button class="btn btn-warning" type="submit" >Create Password</button>
						</div>
					</form>
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