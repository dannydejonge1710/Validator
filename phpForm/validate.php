<!-- <style><?php include 'css.css'; ?></style>

<?php 

	$Voornaam = $_POST['Voornaam'];
	$Achternaam = $_POST['Achternaam']; 
	$PostcodeNr = $_POST['PostcodeNr']; 
	$PostcodeTxt = $_POST['PostcodeTxt']; 
	$Mobiel = $_POST['Mobiel']; 
	$Email = $_POST['Email']; 
	$Woonplaats = $_POST['Woonplaats']; 

	$checkVoornaam = 0;
	if (ctype_alpha($Voornaam) == true) {
		$checkVoornaam = 1;
	}

	header('Location: index.php?Voornaam=' . $checkVoornaam);

?> -->