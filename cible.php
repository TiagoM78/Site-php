<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom-nom']); ?> tu viens de <? echo htmlspecialchars($_POST['choix']); ?> !</p>

<p>Tu est donc <?php echo htmlspecialchars($_POST['case']); ?> couple !</p>

<p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>