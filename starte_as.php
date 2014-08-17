<!DOCTYPE html>
<html>
<head>
<title>Starte AS</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/foundation.css" />
<link rel="stylesheet" type="text/css" href="css/starte_as.css" />
<link rel="shortcut icon" href="img/icon.png" />

<script src="js/starte_as.js"></script>

</head>
<body>
<?php include("top_bar.php");?>
<div class="row">
	<div class="small-12 column">
		<h1>Starte AS</h1>
		<hr />
		<div class="row" data-equalizer>
			<div class="small-6 columns">
				<ul class="pricing-table" data-equalizer-watch>

					<li class="title">AS PAKKE #1</li>
					<li class="price">1990kr</li>
					<li class="description">Beskrivelse av AS pakken.</li>
					<li class="bullet-item">Stiftelses dokument</li>
					<li class="bullet-item">Styreprotokoll</li>
					<li class="bullet-item">Vedtekter</li>
					<li class="bullet-item">Åpningsbalanse</li>
					<li class="bullet-item">Kontroll, utfylling og registrering via Alltinn</li>
					<li class="cta-button"><a class="button" href="#">Velg</a></li>

				</ul>
			</div>
			<div class="small-6 columns">
				<ul class="pricing-table" data-equalizer-watch>

					<li class="title">AS PAKKE #2</li>
					<li class="price">998kr</li>
					<li class="description">Beskrivelse av AS pakken.</li>
					<li class="bullet-item">Stiftelses dokument</li>
					<li class="bullet-item">Styreprotokoll</li>
					<li class="bullet-item">Vedtekter</li>
					<li class="bullet-item">Åpningsbalanse</li>
					<li class="cta-button"><a class="button" href="#">Velg</a></li>

				</ul>
			</div>
		</div>
		<p>Du betaler kun kr 1 990,- eks. mva for pakke en eller 998.- eks mva for pakke to. Så slipper du dyre kostnader der revisorer tar kr 10 000.- og advokater kan komme opp i kr 20 000.- så det er mye å spare.</p>

		<dl class="accordion" data-accordion>
			<dd>
				<a href="#del_1"><h2>Del 1: Selskapets navn</h2></a>
				<div id="del_1" class="content">
					<?php include("starte_as/del_1.php");?>
				</div>
			</dd>
			<dd>
				<a href="#del_2"><h2>Del 2: Informasjon om selskapet</h2></a>
				<div id="del_2" class="content">
					<?php include("starte_as/del_2.php");?>
				</div>
			</dd>
			<dd>
				<a href="#del_3"><h2>Del 3: Selskapets formål</h2></a>
				<div id="del_3" class="content">
					<?php include("starte_as/del_3.php");?>
				</div>
			</dd>
			<dd>
				<a href="#del_4"><h2>Del 4: Selskapets aksjonærer (Eiere)</h2></a>
				<div id="del_4" class="content">
					<?php include("starte_as/del_4.php");?>
				</div>
			</dd>
			<dd>
				<a href="#del_5"><h2>Del 5: Aksjefordeling</h2></a>
				<div id="del_5" class="content">
					<?php include("starte_as/del_5.php");?>
				</div>
			</dd>
			<dd>
				<a href="#del_6"><h2>Del 6: Styre og daglig leder</h2></a>
				<div id="del_6" class="content">
					<?php include("starte_as/del_6.php");?>
				</div>
			</dd>
			<dd>
				<a href="#del_7"><h2>Del 7: Signaturrett</h2></a>
				<div id="del_7" class="content">
					<?php include("starte_as/del_7.php");?>
				</div>
			</dd>
		</dl>
		<h3>Pris å betale</h3>
		<p>Kr 1 990,- eks. mva.</p>
		<p>Jeg har lest og godtar <a data-reveal-id="kjopsvilkar_modal">kjøpsvilkårene</a>.</p>
		<p>Du blir nå sendt til paypal som er vår sikre kortbetalingsløsning. Når du registrerer AS så må en også registrere seg i foretaksregisteret, og der tilkommer et registreringsgebyr til det offentlige. Gebyrsatsene kan ses <a href="http://www.brreg.no/reg_gebyrer/" target="_blank">her</a>.</p>
		<div class="row">
			<div class="small-12 columns">
				<button data-reveal-id="confirmation_modal">Bekreft</button>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php");?>
<?php include("starte_as/confirmation_modal.php");?>
<?php include("starte_as/kjopsvilkar_modal.php");?>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
</body>


</html>

