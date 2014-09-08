<?php
//db.php

$con = mysqli_connect("localhost", "root", "", "dokumentfiksern");
if(mysqli_connect_errno($con)){
	echo "could not connect to database";
}
else{

	//del 1 / 2/5
	echo $_POST['selskapetsNavn'] . "<br />";
	echo $_POST['telefon'] . "<br />";
	echo $_POST['epost'] . "<br />";
	mysqli_query($con, "INSERT INTO selskap(navn, telefon, epost, formal, antall_aksjer, kapital, aksjepris, signaturrett) VALUES('".$_POST['selskapetsNavn']."', '".$_POST['telefon']."', '".$_POST['epost']."', '".$_POST['formal']."', ".$_POST['aksjeTotal'].", ".$_POST['aksjeKapital'].", ".$_POST['aksjePris'].", ".$_POST['signaturVerdi'].")");
	$selskapId = mysqli_insert_id($con);
	//del 2
	echo $_POST['besokAdresse'] . "<br />";
	echo $_POST['besokNummer'] . "<br />";
	echo $_POST['besokSted'] . "<br />";
	echo $_POST['besokKommune'] . "<br />";
	mysqli_query($con, "INSERT INTO besokadresse(adresse, poststed, postnummer, kommune, fk_selskap) VALUES('".$_POST['besokAdresse']."', '".$_POST['besokSted']."', '".$_POST['besokNummer']."', '".$_POST['besokKommune']."', ".$selskapId.")");
	echo $_POST['postAdresse'] . "<br />";
	echo $_POST['postNummer'] . "<br />";
	echo $_POST['postSted'] . "<br />";
	mysqli_query($con, "INSERT INTO postadresse(adresse, poststed, postnummer, fk_selskap) VALUES('".$_POST['postAdresse']."', '".$_POST['postSted']."', '".$_POST['postNummer']."', ".$selskapId.")");
	
	
	
	
	//del 3

	//del 4
	//Person eiere
	$json = json_decode($_POST['personEiere'], true);
	foreach($json as $j){
		echo $j['navn'];
		echo $j['persnr'];
		echo $j['adresse'];
		echo $j['postnr'];
		echo $j['poststed'];
		echo "\n";
		mysqli_query($con, "INSERT INTO person_eiere(navn, personnummer, adresse, postnummer, poststed, fk_selskap) VALUES('".$j['navn']."', '".$j['persnr']."', '".$j['adresse']."', ".$j['postnr'].", '".$j['poststed']."', ".$selskapId.")");
	}
	//Firma eiere
	$json = json_decode($_POST['firmaEiere'], true);
	foreach($json as $j){
		echo $j['navn'];
		echo $j['orgnr'];
		echo $j['adresse'];
		echo $j['postnr'];
		echo $j['poststed'];
		echo "\n";
		mysqli_query($con, "INSERT INTO firma_eiere(navn, organisasjonsnummer, adresse, postnummer, poststed, fk_selskap) VALUES('".$j['navn']."', '".$j['orgnr']."', '".$j['adresse']."', ".$j['postnr'].", '".$j['poststed']."', ".$selskapId.")");
	}

	//del 6
		$dagligLeder = json_decode($_POST['dagligLeder'], true);
		mysqli_query($con, "INSERT INTO daglig_leder(navn, personnummer, adresse, postnummer, poststed, fk_selskap) VALUES('".$dagligLeder['navn']."', '".$dagligLeder['persnr']."', '".$dagligLeder['adresse']."', ".$dagligLeder['postnummer'].", '".$dagligLeder['poststed']."', ".$selskapId.")");
		echo "dl navn:" . $dagligLeder['navn'];
		echo "dl persnr:" . $dagligLeder['persnr'];
		echo "dl adresse:" . $dagligLeder['adresse'];
		echo "dl postnummer:" . $dagligLeder['postnummer'];
		echo "dl poststed:" . $dagligLeder['poststed'];
		$styreLeder = json_decode($_POST['styreLeder'], true);
		mysqli_query($con, "INSERT INTO styre_leder(navn, personnummer, adresse, postnummer, poststed, fk_selskap) VALUES('".$styreLeder['navn']."', '".$styreLeder['persnr']."', '".$styreLeder['adresse']."', ".$styreLeder['postnr'].", '".$styreLeder['poststed']."', ".$selskapId.")");
		echo "StyreLeder navn:" . $styreLeder['navn'];
		echo "StyreLeder pers:" . $styreLeder['persnr'];
		echo "StyreLeder adresse:" . $styreLeder['adresse'];
		echo "StyreLeder postnr:" . $styreLeder['postnr'];
		echo "StyreLeder poststed:" . $styreLeder['poststed'];
		$varaMedlemmer = json_decode($_POST['varaMedlemmer'], true);
		foreach($varaMedlemmer as $vara){
			mysqli_query($con, "INSERT INTO vara_medlemmer(navn, personnummer, adresse, postnummer, poststed, fk_selskap) VALUES('".$vara['navn']."', '".$vara['persnr']."', '".$vara['adresse']."', ".$vara['postnr'].", '".$vara['poststed']."', ".$selskapId.")");
			echo "1";
		}
		$styreMedlemmer = json_decode($_POST['styreMedlemmer'], true);
		foreach($styreMedlemmer as $styre){
			mysqli_query($con, "INSERT INTO styre_medlemmer(navn, personnummer, adresse, postnummer, poststed, fk_selskap) VALUES('".$styre['navn']."', '".$styre['persnr']."', '".$styre['adresse']."', ".$styre['postnr'].", '".$styre['poststed']."', ".$selskapId.")");
			echo "2";
		}
		
		
		
	//del 7	
		

}
mysqli_close($con);
?>

