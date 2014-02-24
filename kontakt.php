<!DOCTYPE html>
<?php
	$fornavn = "";
	$etternavn = "";
	$telefon = "";
	$email = "";
	$emne = "";
	$beskjed = "";
?>
<html>
<head>
<title>Kontakt</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/foundation.css" />
<link rel="shortcut icon" href="img/icon.png" />

<style>
#beskjed
{
	height: 300px;
	resize: none;
}
</style>
</head>
<body>
<?php include("top_bar.php");?>
<div class="row">
	<div class="small-12 column">
		<h1>Kontakt</h1><hr />
	</div>
</div>
<div class="row">
	<div class="small-12 column">
		<div class="panel callout radius">
			<form action="kontakt.php" method="post">
				<div class="row">
					<div class="small-6 columns">
						<label>Fornavn:</label><input id="fornavn" name="fornavn" type="text" />
					</div>
					<div class="small-6 columns">
						<label>Etternavn:</label><input id="etternavn" name="etternavn" type="text" />
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<label>Telefon:</label><input id="telefon" name="telefon" type="text" />
					</div>
					<div class="small-6 columns">
						<label>Email:</label><input id="email" name="email" type="text" />
					</div>
				</div>
				<div class="row">
					<div class="small-4 column">
						<label>Emne:</label><input id="emne" name="emne" type="text" />
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label>Beskjed:</label>
						<textarea id="beskjed" name="beskjed"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">	
						<button type="submit">Send</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include("footer.php");?>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
</body>


</html>

