<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Mon super site</title>
	</head>

	<body>

	<p>
		<a href="formulaire.php">Liens vers les codes de la NASA</a>
	</p>
	<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom et nom de famille :
	</p>

	<form action="cible.php" method="post">	
    	<p><label>Prenom : <input type="text" name="prenom" /></label></p>
    	<p><input type="submit" /></p>
	</form>

	<form action="cible.php" method="post">	
    	<p><label>Jouer vous au jeux vidéos ?<input type="checkbox" name="gamer" /></label></p>
    	<p><input type="submit" /></p>
	</form>
	
	<form action="cible.php" method="post">	
		<p>
    		<label for="ameliorer">
    		Comment pensez-vous que je pourrais améliorer mon site ?
    	    </label>
    		<br />

        	<textarea name="ameliorer" id="ameliorer" rows="10" cols="50"></textarea>
        </p>
	</form>

	<form action="cible.php" method="post">
		<p><label>Où habitez-vous ?</label>
		<select name="choix">
    		<option value="France">France</option>
    		<option value="Amérique">Amérique</option>
    		<option value="Afrique">Afrique</option>
    		<option value="Chine">Chine</option>
		</select>
		<p><input type="submit" /></p>	
		</p>
	</body>
</html>