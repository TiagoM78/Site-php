<!DOCTYPE html>
<html>

<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>

	<?php 
	if (isset($_POST['gamer']))
	{
		echo '<p>Vous êtes un gamer</p>';
	}
	else
	{
		echo '<p>Vous n\'êtes donc pas un gamer</p>';
	}
	?>
</html>
