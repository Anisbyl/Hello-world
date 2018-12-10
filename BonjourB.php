<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon super site</title>
</head>
<body>

	<p>
		<?php
		if(isset($_GET['nom']) AND isset($_GET['prenom']))
		{
			echo 'Bonjour '.$_GET['nom']." ".$_GET['prenom']." !";
		}

		else
		{
			echo 'Il faut renseigner le nom et prénom, s\'il vous plait !';
		}

		?>
	</p>

</body>
</html>