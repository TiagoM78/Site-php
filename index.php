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
    Veuillez taper votre prénom :
	</p>

	<form action="cible.php" method="post">
	<p>	
    	<input type="text" name="prenom" />
    	<input type="submit" value="Valider" />
	</p>
	</form>

	<select name="choix">
    	<option value="choix1">Choix 1</option>
    	<option value="choix2">Choix 2</option>
    	<option value="choix3">Choix 3</option>
    	<option value="choix4">Choix 4</option>
	</select>

	<input type="checkbox" name="case" id="case" /> <label for="case">Célibataire</label>
	<input type="checkbox" name="case" id="case" /> <label for="case">Marier</label>

	</body>
</html>