<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Mon super site</title>
	</head>

	<body>

	<p>
		<a href="bonjour2.php?nom=Monteiro&amp;prenom=Tiago">Dis-moi bonjour</a>
	</p>
	<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom et nom de famille :
	</p>

	<form action="cible.php" method="post">
	<p>	
    	<input type="text" name="prenom-nom" />

	<select name="choix">
    		<option value="France">France</option>
    		<option value="Amérique">Amérique</option>
    		<option value="Chine">Chine</option>
    		<option value="Afrique">Afrique</option>

   		<input type="checkbox" name="case" id="case" /> <label for="case">Célibataire</label>
		<input type="checkbox" name="case" id="case" /> <label for="case">Marier</label>

		Aimez-vous les frites ?
		<input type="radio" name="frites" value="vous aimez" id="vous aimez" checked="checked" /> <label for="vous aimez">Vous aimez</label>
		<input type="radio" name="frites" value="vous n'aimez pas" id="vous n'aimez pas" /> <label for="vous n'aimez pas">vous n'aimez pas</label>

    <input type="submit" value="Valider" />

	</select>
	</p>
	</form>



	</body>
</html>