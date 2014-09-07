<?php
//db.php

$con = mysqli_connect("localhost", "root", "", "dokumentfiksern");
if(mysqli_connect_errno($con)){
	echo "could not connect to database";
}
else{
	//del 1 / 2
	echo $_POST['selskapetsNavn'] . "<br />";
	echo $_POST['telefon'] . "<br />";
	echo $_POST['epost'] . "<br />";
	mysqli_query($con, "INSERT INTO selskap(navn, telefon, epost, formal) VALUES('".$_POST['selskapetsNavn']."', '".$_POST['telefon']."', '".$_POST['epost']."', '".$_POST['formal']."')");
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
	//del 5
		echo "Aksjekapital" . $_POST['aksjeKapital'];
		echo "Aksjetotal" . $_POST['aksjeTotal'];
		echo "Aksjepris" . $_POST['aksjePris'];
		mysqli_query($con, "INSERT INTO selskap(antall_aksjer, kapital, aksjepris) VALUES(".$_POST['aksjeTotal'].", ".$_POST['aksjeKapital'].", ".$_POST['aksjePris'].")");
	//del 6
		echo "";
		echo "";
		echo "";
	//del 7	

}
mysqli_close($con);
?>

