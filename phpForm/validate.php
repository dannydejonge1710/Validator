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
		if (ctype_alpha(str_replace(' ', '', $Achternaam)) == false) {
			$achternaamBorder = '2px solid red';
		}

		$woonplaatsBorder = '2px solid green';
		if (ctype_alpha(str_replace(' ', '', $Woonplaats)) == false) {
			$woonplaatsBorder = '2px solid red';
		}

		$postcodeNrBorder = '2px solid green';
		if (preg_match("/^\d+$/", $PostcodeNr) == false || strlen($PostcodeNr) !== 4) {
			$postcodeNrBorder = '2px solid red';
		}

		$postcodeTxtBorder = '2px solid green';
		if (ctype_alpha($PostcodeTxt) == false || strlen($PostcodeTxt) !== 2) {
			$postcodeTxtBorder = '2px solid red';
		}

		$mobielBorder = '2px solid green';
		if (preg_match("/^\d+$/", $Mobiel) == false || strlen($Mobiel) !== 10) {
			$mobielBorder = '2px solid red';
		}

		$emailBorder = '2px solid green';
		if (strpos($Email, '@') == false || strpos($Email, '.') == false || strpos($Email, ' ')) {
			$emailBorder = '2px solid red';
		}

		return array('voornaam' => $voornaamBorder, 'achternaam' => $achternaamBorder, 'woonplaats' => $woonplaatsBorder, 'postcodenr' => $postcodeNrBorder, 'postcodetxt' => $postcodeTxtBorder, 'mobiel' => $mobielBorder, 'email' => $emailBorder);
	}

?>