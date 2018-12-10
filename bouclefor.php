<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Boucle avec for</title>
</head>
<body>
	<p>

		<?php
		// boucle avec while
		$nombre_de_ligne = 1;
		while($nombre_de_ligne <= 10)
		{
			echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le php.<br />';
			$nombre_de_ligne++; // c'est l'incrémentation soit $nombre_de_ligne = $nombre_de_ligne + 1
		}
		?>
	</p>



	<p>
		<?php
		$nombre_de_ligne = 1;
		while($nombre_de_ligne <= 25)
		{
			echo 'Ceci est la ligne n° '.$nombre_de_ligne.'<br />';
			$nombre_de_ligne=$nombre_de_ligne+5;
		}
		?>
	</p>

	<p>
		<?php
		for($nombre_de_ligne = 1; $nombre_de_ligne <= 25;$nombre_de_ligne = $nombre_de_ligne + 4)
		{
			echo 'Ceci est la ligne n°'.$nombre_de_ligne.'<br />';
		}	
		?>
	</p>


	<p>
		<?php
		// On crée notre array $prenoms
		$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Bénoit');

		// puis on fait une boucle pour tout afficher
		for($numero = 0; $numero < 5; $numero++)
		{
			echo $prenoms[$numero].'<br />';
		}

		?>


	</p>



</body>
</html>