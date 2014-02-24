<!DOCTYPE html>
<html>
<head>
<title>Dokumentfikser'n</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/foundation.css" />
<link rel="shortcut icon" href="img/icon.png" />
<style>
	.orbit-slides
	{
		margin-left: auto;
		margin-right: auto;
	}

</style>
</head>
<body>
<?php include("top_bar.php");?>
<div class="row">
	<div class="small-12 column">
		<h1>Dokumentfikser'n</h1>
		<h3>Vi fikser det for deg</h3>
		<hr />
		
	</div>
</div>
<div class="row">
	<div class="small-12 column">
		<ul class="example-orbit" data-orbit data-options="pause_on_hover:false;timer_speed:3000;"> 
			<li> 
				<a href="starte_as.php"><img class="orbit-slides" src="img/slide_1(scaled).jpg" alt="slide 1" /></a> 
				<div class="orbit-caption">Starte AS?</div> 
			</li> 
			<li> 
				<img class="orbit-slides" src="img/slide_2.jpg" alt="slide 2" /> 
				<div class="orbit-caption">Vi fikser dokumentene for deg. Og registrerer firmaet.</div> 
			</li> 
			<li> 
				<img class="orbit-slides" src="img/slide_3.jpg" alt="slide 3" /> 
				<div class="orbit-caption">Fjerne revisor? Vi fikser dokumentene og registreringen.</div> 
			</li> 
			<li> 
				<img class="orbit-slides" src="img/slide_4.jpg" alt="slide 4" /> 
				<div class="orbit-caption">Selge bolig? Båt? Bil? Taushetserklæring og mere? Vi har dokumentene.</div> 
			</li> 
			<li> 
				<img class="orbit-slides" src="img/slide_5(scaled).jpg" alt="slide 5" /> 
				<div class="orbit-caption">Vi fikser det for deg!</div> 
			</li> 
		</ul>
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
