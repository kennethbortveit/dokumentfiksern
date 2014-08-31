<!DOCTYPE html>
<?php
	$con = mysqli_connect("localhost", "kenneth", "kenzys", "dokumentfiksern");
?>
<html ng-app="starteAs">
<head>
<title>Starte AS</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/foundation.css" />
<link rel="stylesheet" type="text/css" href="css/starte_as.css" />
<link rel="shortcut icon" href="img/icon.png" />

<script src="js/angular.min.js"></script>
<script src="js/modules/starte-as.js"></script>

</head>
<body ng-controller="starteAsController as starte">
<?php include("top_bar.php");?>
<div class="row">
	<div class="small-12 column">
		<h1>Starte AS</h1>
		<hr />
		<div class="row" data-equalizer>
			<div class="small-6 columns">
				<ul class="pricing-table" data-equalizer-watch ng-style="starte.pakkeEnStyle">

					<li class="title">AS PAKKE #1</li>
					<li class="price">{{starte.pakkeEnPris | currency : ""}}kr</li>
					<li class="description">Beskrivelse av AS pakken.</li>
					<li class="bullet-item">Stiftelses dokument</li>
					<li class="bullet-item">Styreprotokoll</li>
					<li class="bullet-item">Vedtekter</li>
					<li class="bullet-item">Åpningsbalanse</li>
					<li class="bullet-item">Kontroll, utfylling og registrering via Alltinn</li>
					<li class="cta-button"><a class="button" ng-click="starte.selectEn()">Velg</a></li>

				</ul>
			</div>
			<div class="small-6 columns">
				<ul class="pricing-table" data-equalizer-watch ng-style="starte.pakkeToStyle">

					<li class="title">AS PAKKE #2</li>
					<li class="price">{{starte.pakkeToPris | currency : ""}}kr</li>
					<li class="description">Beskrivelse av AS pakken.</li>
					<li class="bullet-item">Stiftelses dokument</li>
					<li class="bullet-item">Styreprotokoll</li>
					<li class="bullet-item">Vedtekter</li>
					<li class="bullet-item">Åpningsbalanse</li>
					<li class="cta-button"><a class="button" ng-click="starte.selectTo()">Velg</a></li>

				</ul>
			</div>
		</div>
		<p>Du betaler kun kr {{starte.pakkeEnPris}},- eks. mva for pakke en eller {{starte.pakkeToPris}},- eks mva for pakke to. Så slipper du dyre kostnader der revisorer tar kr {{10000}},- og advokater kan komme opp i kr {{20000}},- så det er mye å spare.</p>

		<dl class="accordion" data-accordion>
			<dd>
				<a href="#del_1"><h2>Del 1: Selskapets navn</h2></a>
				<div id="del_1" class="content">
					<p>Når det gjelder selskapsnavn så er det noen navneregler du må vite om, <a href="https://www.altinn.no/no/hjelp-til-regelverk/starte-bedrift/for-du-starter/navn/krav/" target="_blank">se her</a>. Det viktigste er at navnet ikke er benyttet før, og det ser du i Brønnøysund registret. Skriv inn ønsket navn i feltet under, og klikk for å sjekke om navnet er ledig.</p>
					<form novalidate>
						<label for="input-selskapets-navn">Selskapets Navn</label>
						<input id="input-selskapets-navn" type="text" ng-model="selskapetsNavn" />
						<input id="checkbox-selskapets-navn" type="checkbox" />
						<label>Jeg har kontrollert at navnet er ledig og i tråd med <a href="https://www.altinn.no/no/hjelp-til-regelverk/starte-bedrift/for-du-starter/navn/krav/" target="_blank">navnereglene.</a></label>
					</form>
				</div>
			</dd>
			<dd>
				<a href="#del_2"><h2>Del 2: Informasjon om selskapet</h2></a>
				<div id="del_2" class="content">
					<div ng-controller="kontaktController as kontakt">
						<form novalidate>
							
							<label>Besøksadresse</label><input type="text" ng-model="kontakt.besokAdresse" ng-change="kontakt.copyBesokTilPost()" />
							<label>Postnummer</label><input type="text" ng-model="kontakt.besokPostnummer" ng-change="kontakt.copyBesokTilPost()" />
							<label>Sted</label><input type="text" ng-model="kontakt.besokPostSted" ng-change="kontakt.copyBesokTilPost()" />
							<label>Kommune</label><input type="text" ng-model="kontakt.kommune" />
							<p>Er postadressen ulik besøksadressen?</p>
							<input type="radio" ng-model="kontakt.ulik" value="ja" /> 
							<label for="likAdresseJa">Ja</label>
							<input type="radio" ng-model="kontakt.ulik" ng-change="kontakt.copyBesokTilPost()" value="nei" />
							<label for="likAdresseNei">Nei</label>
							<label>Postadresse</label><input type="text" ng-readonly="kontakt.ulik == 'nei'" ng-model="kontakt.postadresse" />
							<label>Postnummer</label><input type="text" ng-readonly="kontakt.ulik == 'nei'" ng-model="kontakt.postnummer" />
							<label>Poststed</label><input type="text" ng-readonly="kontakt.ulik == 'nei'" ng-model="kontakt.poststed"/>
							<label>Telefon</label><input type="text" ng-model="kontakt.telefon" />
							<label>E-post</label><input type="text" ng-model="kontakt.epost" />
							<label>Bekreft e-post</label><input type="text" ng-model="kontakt.bekreftEpost" />
						</form>
					</div>
				</div>
			</dd>
			<dd>
				<a href="#del_3"><h2>Del 3: Selskapets formål</h2></a>
				<div id="del_3" class="content">
					<p>Staten krever en nøyaktig beskrivelse av selskapets aktivitet. Vær kortfattet, men husk at bare et enkeltord, som f.eks. "rådgiving", ikke godtas. Ved virksomhet i flere bransjer må du oppgi dem i rekkefølge etter størrelsen på forventet omsetning/sysselsetting.</p>
					<div>
						<form>
							<label>Formål</label>
							<textarea></textarea>
						</form>
					</div>

				</div>
			</dd>
			<dd>
				<a href="#del_4"><h2>Del 4: Selskapets aksjonærer (Eiere)</h2></a>
				<div id="del_4" class="content">
					<p>En kan ha både personer og firmaer som eiere. Personer må være fylt 18 år. Utenlandske aksjonærer som ikke har norsk personnummer må ha norsk D-nummer. Hvis firmaaksjonær er et norsk aksjeselskap som ikke har fått org.nr. enda, skrives "Selskap under stiftelse" i feltet for org.nr. Legg til aksjonærer ved å klikke på lenkene nedenfor.</p>	
					<div class="row">
						<div ng-controller="eierController as eier">
							<div class="row">
								<div class="small-12 columns">
									<button ng-click="eier.leggTilPerson()">Legg til person</button>
									<button ng-click="eier.leggTilFirma()">Legg til firma</button>
								</div>
							</div>
							<form>
								<div class="small-4 columns" ng-repeat="person in eier.personer">
									<div class="panel">
										<h3>Person</h3>
										<label>Navn</label><input type="text" ng-model="person.navn" />
										<label>Personnr.</label><input type="text" ng-model="person.persnr" />
										<label>Adresse</label><input type="text" ng-modal="person.adresse" />
										<label>Postnummer</label><input type="text" ng-model="person.postnr" />
										<label>Poststed</label><input type="text" ng-model="person.poststed" />
										<button ng-click="eier.fjernPerson(person)">Fjern</button>
									</div>
								</div>
								<div class="small-4 columns" ng-repeat="firma in eier.firmaer">
									<div class="panel">
										<h3>Firma</h3>
										<label>Navn</label><input type="text" ng-model="firma.navn" />
										<label>Organisasjonsnr.</label><input type="text" ng-model="firma.orgnr" />
										<label>Adresse</label><input type="text" ng-model="firma.adresse" />
										<label>Postnummer</label><input type="text" ng-model="firma.postnr" />
										<label>Poststed</label><input type="text" ng-model="firma.poststed" />
										<button ng-click="eier.fjernFirma(firma)">Fjern</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</dd>
			<dd>
				<a href="#del_5"><h2>Del 5: Aksjefordeling</h2></a>
				<div id="del_5" class="content">
					<div ng-controller="aksjeController as aksje">
						<p>Her velger du fordelingen av aksjer til hver aksjonær. Du kan fritt endre, og summene regnes ut automatisk. Minimumskravet til aksjekapital er kr 30 000. Du står fritt til å bruke en høyere sum.</p>
						<form>
							<label>Sum aksjekapital</label>
							<input type="text" ng-model="aksje.kapital" ng-change="aksje.calculateAntall()" />
							<label>Aksjer totalt</label>
							<input  type="text" ng-model="aksje.antall" ng-change="aksje.calculatePris()" />
							<label>Pris pr. aksje</label>
							<input type="text" ng-model="aksje.pris" ng-change="aksje.calculateKapital()" />
						</form>
					</div>
				</div>
			</dd>
			<dd>
				<a href="#del_6"><h2>Del 6: Styre og daglig leder</h2></a>
				<div id="del_6" class="content">
					<div ng-controller="dagligLederController as dl">
						<p>Det er valgfritt om å ha en daglig leder. En eventuell daglig leder må ha fylt 18 år.</p>
						<form>
							<p><input type="radio" value="ja" ng-model="dl.svar" /><label>Det skal være daglig leder.</label><br />
							<input type="radio" value="nei" ng-model="dl.svar" /><label>Det skal ikke være daglig leder.</label></p>
							<div class="row" ng-show="dl.svar == 'ja'">
								<div class="small-4 columns">
									<div class="panel">
										<h3>Daglig Leder</h3>
										<label>Navn</label><input type="text" />
										<label>Personnr./D-nr.</label><input type="text" />
										<label>Adresse</label><input type="text" />
										<label>Postnummer</label><input type="text" />
										<label>Poststed</label><input type="text" /> 
									</div>
								</div>
							</div>
						</form>
					</div>
					<div ng-controller="styreController as styre">
						{{"Det funker"}}
						<p>Styret må ha en styreleder. Det er valgfritt om man vil ha flere styremedlemmer og/eller varamedlemmer. Både aksjonærer og eksterne personer kan sitte i styret. Alle må ha fylt 18 år.</p>
						<div class="row">
							<div class="small-4 columns">
								<div class="panel">
									<h3>StyreLeder</h3>
									<label>Navn</label><input type="text" ng-model="styre.leder.navn" />
									<label>Persnr./D-nr.</label><input type="text" ng-model="styre.leder.persnr" />
									<label>Adresse</label><input type="text" ng-model="styre.leder.adresse" />
									<label>Postnr.</label><input type="text" ng-model="styre.leder.postnr" />
									<label>Poststed</label><input type="text" ng-model="styre.leder.poststed" />
								</div>
							</div>

						</div>
						<div class="row">

							<div class="small-12 columns">
								<button ng-click="styre.leggTilStyreMedlem()">Legg til styremedlem</button>
								<button ng-click="styre.leggTilVaraMedlem()">Legg til varamedlem</button>
							</div>
						</div>
						<div class="row">
							<div class="small-4 columns" ng-repeat="medlem in styre.styre">
								<div class="panel">
									<h3>Styremedlem</h3>		
									<label>Navn</label><input type="text" ng-model="medlem.navn" />
									<label>Persnr./D-nr.</label><input type="text" ng-model="medlem.persnr" />
									<label>Adresse</label><input type="text" ng-model="medlem.adresse" />
									<label>Postnr.</label><input type="text" ng-model="medlem.postnr" />
									<label>Poststed</label><input type="text" ng-model="medlem.poststed" />
									<button ng-click="styre.fjernStyre(medlem)">Fjern</button>	
								</div>

							</div>
							<div class="small-4 columns" ng-repeat="medlem in styre.vara">
								<div class="panel">
									<h3>Varamedlem</h3>
									<label>Navn</label><input type="text" ng-model="medlem.navn" />
									<label>Persnr./D-nr.</label><input type="text" ng-model="medlem.persnr" />
									<label>Adresse</label><input type="text" ng-model="medlem.adresse" />
									<label>Postnr.</label><input type="text" ng-model="medlem.postnr" />
									<label>Poststed</label><input type="text" ng-model="medlem.poststed" />
									<button ng-click="styre.fjernVara(medlem)">Fjern</button>

								</div>
							</div>

						</div>

					</div>
				</div>
			</dd>
			<dd>
				<a href="#del_7"><h2>Del 7: Signaturrett</h2></a>
				<div id="del_7" class="content">
					<p>Hvem skal kunne signere på vegne av selskapet? For firmaer med kun én eier er det mest vanlig å velge Styrets leder alene. For firmaer med flere eiere er det mest vanlig å velge Styrets medlemmer hver for seg, større selskaper gir også en prokura til daglig leder, men det kan fikses senere.</p>			
					<div ng-controller="signaturController as signatur">
						<form>
							<input type="radio" value="0" ng-model="signatur.rett"/><label>Styrets leder alene.</label><br />
							<input type="radio" value="1" ng-model="signatur.rett"/><label>Daglig leder alene.</label><br />
							<input type="radio" value="2" ng-model="signatur.rett"/><label>Styrets medlemmer hver for seg.</label><br />
							<input type="radio" value="3" ng-model="signatur.rett"/><label>Styret i fellesskap*.</label><br />
							<input type="radio" value="4" ng-model="signatur.rett"/><label>Daglig leder og styret i fellesskap*.</label><br />
							<input type="radio" value="5" ng-model="signatur.rett"/><label>Styrets leder og ett styremedlem i fellesskap*.</label><br />
							<input type="radio" value="6" ng-model="signatur.rett"/><label>To styremedlemmer i fellesskap*.</label><br />
							<p>*) I felleskap betyr at mer enn én person må signere. De fleste signaturer skjer i Altinn og kan gjøres på ulike tidspunkt fra ulike steder.</p>
						</form>
					</div>

				</div>
			</dd>
		</dl>
		<div class="row">
			<h3>Pris å betale</h3>
			
			<p>{{starte.totalKostnad | currency : ""}},- eks. mva.</p>
			<p>Jeg har lest og godtar <a data-reveal-id="kjopsvilkar_modal">kjøpsvilkårene</a>.</p>
			<p>Du blir nå sendt til paypal som er vår sikre kortbetalingsløsning. Når du registrerer AS så må en også registrere seg i foretaksregisteret, og der tilkommer et registreringsgebyr til det offentlige. Gebyrsatsene kan ses <a href="http://www.brreg.no/reg_gebyrer/" target="_blank">her</a>.</p>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<button data-reveal-id="confirmation_modal">Bekreft</button>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php");?>
<?php include("starte_as/kjopsvilkar_modal.php");?>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
</body>


</html>

