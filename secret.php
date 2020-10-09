<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Données confidentielle appartenant à la NASA</title>
	</head>

	<body>

		<?php 
	if(isset($_POST['mot-de-passe']) AND $_POST['mot-de-passe'] == "kangourou")
	{
		?>

		<p>Voici les codes d'accès :</p>
		<p>GDSG-FDS7-GFD6-78FD-G976-0G72-0153-2K53</p>
		<?php
	}
	else
	{
		echo '<p>Mot de passe incorect</p>';		
	}
	?>

	</body>
</html>
