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
			
			for($i=0;$i<$_GET['repeter'];$i++)
			{
				echo 'Bonjour '.$_GET['nom']." ".$_GET['prenom']." !<br />";
			}
		else
		{
			echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions, s\'il vous plaît !';
		}




		?>
	</p>

</body>
</html>