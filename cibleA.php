<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>La cible A</title>
	</head>
	<body>

		<p>Bonjour !</p>

		<!-- J'utilise l'expression "htmlspecialchars" ou "strip_tags" pour protéger le contenu -->

		<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo strip_tags($_POST['prenom']); ?> !</p>

		<p>Ta date de naissance est le : <?php echo htmlspecialchars($_POST['date_de_naissance']);?></p>

		<p>Si tu veux changer de prénom, <a href="formulaireA.php">clique ici</a> pour revenir à la page formulaireA.php.</p>

		<p>Voici le petit contenu laissé par <?php echo strip_tags($_POST['prenom']); ?> qui déclare ceci : "<?php echo htmlspecialchars($_POST['message']); ?>"</p>

		<p>Elle vient du pays : <?php echo htmlspecialchars($_POST['choix']);?> et elle se plait dans ce pays véritable !</p>

		<p>A présent, son âge est : <?php echo htmlspecialchars($_POST['age']); ?></p>

		<p>Mon pseudo est : <?php echo htmlspecialchars($_POST['pseudo']); ?></p>

	</body>
</html>
