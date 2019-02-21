<?php

	function validateAction(){

		$Voornaam = $_POST['Voornaam'];
		$Achternaam = $_POST['Achternaam']; 
		$PostcodeNr = $_POST['PostcodeNr']; 
		$PostcodeTxt = $_POST['PostcodeTxt']; 
		$Mobiel = $_POST['Mobiel']; 
		$Email = $_POST['Email']; 
		$Woonplaats = $_POST['Woonplaats']; 

		$voornaamBorder = '2px solid green';
		if (ctype_alpha($Voornaam) == false) {
			$voornaamBorder = '2px solid red';
		}

		$achternaamBorder = '2px solid green';
		if (ctype_alpha($Achternaam) == false) {
			$achternaamBorder = '2px solid red';
		}

		$woonplaatsBorder = '2px solid green';
		if (ctype_alpha($Woonplaats) == false) {
			$woonplaatsBorder = '2px solid red';
		}

		return array('voornaam' => $voornaamBorder, 'achternaam' => $achternaamBorder, 'woonplaats' => $woonplaatsBorder);
	}

?>