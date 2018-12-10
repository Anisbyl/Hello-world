<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Le formulaire en php</title>
	</head>
	<body>
		<p>
			Cette page ne contient que du HTML. <br />
			Veuillez saisir votre prénom :
		</p>

		<form method="post" action="cible.php">
			<p>
				<input type="text" name="prenom" />
				<input type="submit" value="Envoyer" />

			</p>

		</form>

	</body>
</html>