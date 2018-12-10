<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon super site</title>
</head>
<body>

	<p>
		<?php
		if(isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter']))
		{
			//faire un transtypage, en convertissant les paramètres indésirables en chiffre entier
			$_GET['repeter']=(int)$_GET['repeter'];

			//le nombre de répétition doit être compris entre 1 et 100
			if($_GET['repeter']>=1 AND $_GET['repeter']<=100)
			{
				for($i=0;$i<$_GET['repeter'];$i++)
				{
					echo 'Bonjour '.$_GET['nom']." ".$_GET['prenom']." !<br />";
				}
			}
			Else
			{
				echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions, s\'il vous plaît !';
			}
		}
		?>
	</p>

</body>
</html>