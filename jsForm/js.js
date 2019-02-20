// Danny de Jonge, Validator

function startValidator()
{
	var voorNaam = document.forms["jsForm"]["Voornaam"].value;
	var achterNaam = document.forms["jsForm"]["Achternaam"].value;
	var postCodeNr = document.forms["jsForm"]["PostcodeNr"].value;
	var postCodeTxt = document.forms["jsForm"]["PostcodeTxt"].value;
	var mobiel = document.forms["jsForm"]["Mobiel"].value;
	var email = document.forms["jsForm"]["Email"].value;
	var woonPlaats = document.forms["jsForm"]["Woonplaats"].value;

	if (isNaN(voorNaam)) {
        document.getElementById('Voornaam').style.border = '2px solid green';
  	} else {
        document.getElementById('Voornaam').style.border = '2px solid red';
  	}

  	if (isNaN(achterNaam)) {
         document.getElementById('Achternaam').style.border = '2px solid green';
  	} else {
        document.getElementById('Achternaam').style.border = '2px solid red';
  	}

  	if (isNaN(postCodeNr)) {
        document.getElementById('PostcodeNr').style.border = '2px solid red';
  	} else {
  		if (postCodeNr.length < 4 || postCodeNr.length > 4) {
        	document.getElementById('PostcodeNr').style.border = '2px solid red';
  		} else {
        	document.getElementById('PostcodeNr').style.border = '2px solid green';
  		}
  	} 

	if (isNaN(mobiel)) {
        document.getElementById('Mobiel').style.border = '2px solid red';
  	} else {
  		if (mobiel.length < 10 || mobiel.length > 10) {
        	document.getElementById('Mobiel').style.border = '2px solid red';
  		} else {
        	document.getElementById('Mobiel').style.border = '2px solid green';
  		}
  	}

}