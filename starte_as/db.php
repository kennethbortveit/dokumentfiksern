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
	//del 2
	echo $_POST['besokAdresse'] . "<br />";
	echo $_POST['besokNummer'] . "<br />";
	echo $_POST['besokSted'] . "<br />";
	echo $_POST['besokKommune'] . "<br />";
	mysqli_query($con, "INSERT INTO besokadresse(adresse, poststed, postnummer, kommune) VALUES('".$_POST['besokAdresse']."', '".$_POST['besokSted']."', '".$_POST['besokNummer']."', '".$_POST['besokKommune']."')");
	echo $_POST['postAdresse'] . "<br />";
	echo $_POST['postNummer'] . "<br />";
	echo $_POST['postSted'] . "<br />";
	mysqli_query($con, "INSERT INTO postadresse(adresse, poststed, postnummer) VALUES('".$_POST['postAdresse']."', '".$_POST['postSted']."', '".$_POST['postNummer']."')");
	
	//del 3

	//del 4

	//del 5

	//del 6

	//del 7	

}
mysqli_close($con);
?>

