<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Mon super site</title>
	</head>

	<body>

	<p>
		<?php
		if (isset($_GET['nom']) AND isset($_GET['prenom']))
		{
			echo '<p>Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>';
		}
		else
		{
			echo 'Pas de nom ou de prenom défini !';
		}
		?>
	</p>

	</body>
</html>