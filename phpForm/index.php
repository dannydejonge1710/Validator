<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- 	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">  -->
	<link rel="stylesheet" href="css.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
</head> 
<body>

	<style>
		.form-control{
			border: 1px solid black;
		}

	</style>

	<nav style="border-bottom: 1px solid black; background-color: #98ff96" class="navbar navbar">
  		<ul class="nav"">
	      	<li class="nav-item">
	        	<a style="color: gray; cursor: pointer; outline: none;" class="nav-link" href="../htmlForm/index.html">HTML </a>
	        </li>
	        <li class="nav-item">
	        	<a style="color: gray; cursor: pointer; outline: none;" class="nav-link" href="index.html">JavaScript </a>
	        </li>
	        <li class="nav-item">
	        	<a style="color: black; cursor: pointer; outline: none;" class="nav-link" href="index.html">PHP </a>
	      	</li>
	    </ul>
	</nav>

	<div style="margin: 0 auto; width: 1000px; padding-top: 40px;" id="wrapper">

		<h1>PHP Form</h1>

		<form name="jsForm">
			<div class="form-group">
			    <input style="box-shadow: none;" type="text" class="form-control" id="Voornaam" name="Voornaam" placeholder="Voornaam">
		  	</div>

		  	<div class="form-group">
			    <input style="box-shadow: none;" type="text" class="form-control" id="Achternaam" name="Achternaam" placeholder="Achternaam">
		  	</div>

		  	<div class="form-group">
			    <input style="width: 75%; display: inline-block; margin-right: 5px; box-shadow: none;" type="text" class="form-control" id="PostcodeNr" name="PostcodeNr" placeholder="Postcode">
			   	<input style="width: 24%; display: inline-block; box-shadow: none;" type="text" class="form-control" id="PostcodeTxt" name="PostcodeTxt">
		  	</div>

		  	<div class="form-group">
			    <input style="box-shadow: none;" type="text" class="form-control" name="Mobiel" id="Mobiel" placeholder="Mobiel">
		  	</div>

			<div class="form-group">
				<input style="box-shadow: none;" type="text" class="form-control" name="Email" id="Email" placeholder="Email">
			</div>

		  	<div class="form-group">
			    <input style="box-shadow: none;" type="text" class="form-control" name="Woonplaats" id="Woonplaats" placeholder="Woonplaats">
		  	</div>

  			<button type="button" class="btn btn-primary">Submit</button>

		</form>
	</div>	

</body>
</html>
