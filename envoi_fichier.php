<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Le formulaire d'envoi de fichier</title>
	</head>
	<body>
		<form method="POST" action="cible_envoi.php" enctype="multipart/form-data">
			<p>
				Formulaire d'envoi de fichier :<br /><br />
				<input type="file" name="monfichier" /><br /><br />
				<input type="submit" value="Envoyer le fichier" />
			</p>

		</form>

	</body>
</html>