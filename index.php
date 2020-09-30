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

	</body>
</html>