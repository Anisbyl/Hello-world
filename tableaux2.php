<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Tableaux en PHP</title>
    </head>
    <body>
        <?php
            $coordonnees['prenom'] = 'François';
            $coordonnees['nom'] = 'Dupont';
            $coordonnees['adresse'] = '3 rue du Paradis';
            $coordonnees['ville'] = 'Marseille';

            echo $coordonnees['nom'];
            echo $coordonnees['ville'];
        ?> 

        <br \>

        <?php
        // On crée notre array $prenoms
        $prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoit');

        // Puis on fait une boucle pour tout afficher :
        for ($numero = 0; $numero < 5; $numero++)
        {
            echo $prenoms[$numero].'<br \><br \>';
        }

        ?>

        <?php
        $prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoit');
        foreach ($prenoms as $element)
        {
            echo $element.'<br \><br \>';
        }

        ?>

        <?php
        // On crée notre array $coordonnees
        $coordonnees = array('prenom' => 'François', 'nom' => 'Dupont', 'adresse' => '3 rue du Paradis', 'ville' => 'Marseille');
        foreach ($coordonnees as $element)
        {
            echo $element.'<br \><br \>';
        }

        ?>

        <?php
        // On peut aussi récupérer la clé de l'élément
        $coordonnees = array('prenom' => 'François', 'nom' => 'Dupont', 'adresse' => '3 rue du Paradis', 'ville' => 'Marseille');
        foreach ($coordonnees as $cle => $element)
        {
            echo '['.$cle.'] vaut '.$element.'<br \><br \>';
        }

        ?>

        <?php
        $coordonnees = array('Nom' => 'Diby', 'Prénom' => 'Anicet', 'Adresse' => '41 rue Jehan le Maistre', 'Code postal' => '91100', 'Ville' => 'Corbeil-Essonnes');
        foreach ($coordonnees as $cle => $element)
        {
            echo $cle.' : '.$element.'<br \>';
        }

        ?>
    </body>
</html>