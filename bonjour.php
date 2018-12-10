<!DOCTYPE htlm>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Bonjour en php</title>
	</head>
<body>
		<?php 
		$prenom = 'Anicet';
		$nom = 'DIBY';
		$repeter = 8;
		if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])) // la fonction spéciale isset va tester si la variable prénom, la variable nom et la variable repeter existent.
		{
			// 	1 : On force la conversion en nombre entier
			$_GET['repeter'] = (int)$_GET['repeter'];

			// 2 : Le nombre entier doit être compris entre 1 et 100
			if (($_GET['repeter']) > 7 AND ($_GET['repeter']) <= 100)
			{

				for ($i = 0; $i < ($_GET['repeter']) ; $i++)
				{
					echo 'Bonjour '.$_GET['prenom'].' '.$_GET['nom'].' !<br />';
				}
			}
		}
		else // Il manque des paramètres, on avertit le visiteur
		{
			echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
		}
		?>	
	</body>
</html>