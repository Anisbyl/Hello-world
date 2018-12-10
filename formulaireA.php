<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Formulaire en php</title>
</head>
<body>

	<p>
		<?php 

		$jour = date('d');
		$mois = date('m');
		$annee = date('Y');

		$heure = date('H');
		$minute = date('i');

		// Maintenant, on peut afficher ce qu'on a recueilli

		echo 'Bonjour ! Aujourd\'hui, nous sommes le '.$jour.'/'.$mois.'/'.$annee.' et il est '.$heure.'h'.$minute;
		?>

		<form method="post" action="cibleA.php">
			<p>

				Cette page ne contient que du HTML. <br />
				Veuillez taper votre prénom : <br /><br />
				<label for="prenom">Votre prénom :</label>
				<input type="text" name="prenom" id="prenom">

			</p>

			<p>
				Quelle est la date de ta naissance :<br /><br />
				<input type="date" name="date_de_naissance" />

			</p>

			<p>
			
				<textarea name="message" rows="8" cols="45">Mon petit message ici.	
				</textarea>

			</p>

			<p>
				De quel pays viens-tu ?<br />
				<select name="choix">
				<optgroup label="Europe">
					<option value="France">France</option>
					<option value="Espagne">Espagne</option>
					<option value="Italie">Italie</option>
					<option value="Royaume-Uni">Royaume-Uni</option>
				</optgroup>
				<optgroup label="Amérique">
					<option value="Canada" selected="selected">Canada</option>
					<option value="Etats-Unis">Etats-Unis</option>
				</optgroup>
				<optgroup label="Asie">
					<option value="Chine">Chine</option>
					<option value="Japon">Japon</option>
				</optgroup>

				</select>
			</p>

			<p>
			Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
			<input type="radio" name="age" value="moins de 15 ans" id="moins15" />
			<label for="moins15">Moins de 15 ans</label><br />
			<input type="radio" name="age" value="entre 15 et 25 ans" id="medium15-25" />
			<label for="medium15-25">15-25 ans</label><br />
			<input type="radio" name="age" value="entre 25 et 40 ans" id="medium25-40" />
			<label for="medium25-40">25-40 ans</label><br />


			</p>

			<p>
				<input type="hidden" name="pseudo" value="Anisbyl2058" />
			</p>

			<p>
				<input type="submit" value="Valider">
			</p>


		</form>

	</p>

</body>
</html>