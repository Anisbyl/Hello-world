<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Cible en php</title>
</head>
<body>
	<p>Bonjour !</p>

	<p>Je sais comment tu t'appelles, hé hé. <br />
		Tu t'appelles <?php echo $_POST['prenom'];?>
	</p>

	<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

</body>
</html>