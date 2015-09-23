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
							<label for="wordCount" class="col-md-1 control-label">Words: </label><small class="right">(Max: 12)</small>
							<input id="wordCount" class="form-control" type="number" name="wordCount">
						</div>
						<div class="form-group">
							<label for="separator" class="col-md-1 control-label">Separator: </label>
							<select id="separator" class="form-control" name="separator">
								<option value=" ">[space]</option>
								<option value=",">,</option>
								<option value=".">.</option>
								<option value="-">-</option>
								<option value="_">_</option>
								<option value="">[none]</option>
							</select>
						</div>
						<div class="form-group">
							<label for="symbols" class="col-md-1 control-label">Symbols: </label><small class="right">(Max: 12)</small>
							<input id="symbols" class="form-control" type="number" name="symbols">
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">Symbol Placement:</label>
							<div class="radio-inline">
								<label for="symbolLocationRandom0" class="col-md-6 control-label">
									<input id="symbolLocationRandom0" type="radio" name="symbolLocationRandom" value="0" checked>
									End of Password
								</label>
								<label for="symbolLocationRandom1" class="col-md-6 control-label">
									<input id="symbolLocationRandom1" type="radio" name="symbolLocationRandom" value="1">
									Random
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="numbers" class="col-md-1 control-label">Numbers: </label><small class="right">(Max: 12)</small>
							<input id="numbers" class="form-control" type="number" name="numbers">
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">Number Placement:</label>
							<div class="radio-inline">
								<label for="numberLocationRandom0" class="col-md-6 control-label">
									<input id="numberLocationRandom0" type="radio" name="numberLocationRandom" value="0" checked>
									End of Password
								</label>
								<label for="numberLocationRandom1" class="col-md-6 control-label">
									<input id="numberLocationRandom1" type="radio" name="numberLocationRandom" value="1">
									Random
								</label>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-warning" type="submit" >Create Password</button>
						</div>
					</form>
					<h3>Background</h3>
					<p> Wecome to the xkcd password generator! Standard passwords can be difficult to remember and are not as secure as most people think. However, passwords in the xkcd style use natural words to make it easy to remember passwords much longer than would be possible with standard passwords. The increased length allows for passwords that are significantly more secure. Furthermore, you can optionally add symbols and numbers to make the password even more secure.</p>
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