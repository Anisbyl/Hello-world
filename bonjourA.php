<!DOCTYPE htlm>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Bonjour en php</title>
	</head>
	<body>
		<?php 
		$coordonnees['prenom'] = 'Anicet';
		$coordonnees['nom'] = 'DIBY';
		$coordonnees['adresse'] = "41 rue Jehan Le Maistre";
		$coordonnees['ville'] = 'Corbeil-Essonnes';
		

				$jour = date('d');
		$mois = date('m');
		$annee = date('Y');

		$heure = date('H');
		$minute = date('i');

		// Maintenant je vais afficher la date et l'heure

		echo 'Bonjour Monsieur '.$coordonnees['nom']." ".$coordonnees['prenom'].' ! <br />
		nous sommes le '.$jour."/".$mois."/".$annee." et il est ".$heure."h".$minute.'.';
		?>
		
	</body>
</html>