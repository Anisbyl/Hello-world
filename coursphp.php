<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cours en PHP</title>
    </head>
    <body>
        <p>
            Cette page contient du code HTML avec des balises PHP. <br />
            Voici quelques petits test :
        </p>
        
        <?php echo "Bonjour, chéri coco ! Tu es là !" ?>
        <ul>
            <li style="color: blue;">Texte en bleu</li>
            <li style="color: red;">Texte en red</li>
            <li style="color: green;">Texte en vert</li>
        </ul>

        <?php
        $age=8;

        if ($age <=12) // Si l'âge est inférieur ou égal à 12
        {
            echo "Salut gamin ! Bienvenue sur mon site !<br />";
            $autorisation_entrer = "Oui";
        }
        else // Sinon
        {
            echo "Ceci est un site pour enfant, vous êtes trop vieux pour pouvoir entrer. Au revoir !<br />";
            $autorisation_entrer = "Non<br />";
        }

        echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
        ?>

        <?php 
        $autorisation_entrer = "Oui";

        if ($autorisation_entrer == "Oui") // Si on a l'autorisation d'entrer
        {
            // instruction à exécuter quand on est autorisé à entrer
        }
        elseif ($autorisation_entrer == "Non") // Sinon si on n'a pas l'autorisation d'entrer
        {
           // instruction à exécuter quant on n'est pas autorisé à entrer
        }
        else // Sinon (la variable ne contient ni Oui ni Non, on ne peut pas agir)
        {
            echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
        }

        ?>

        <?php 
        $autorisation_entrer = true;

        if ($autorisation_entrer == true)
        {
            echo "Bienvenue petit nouveau. :o)<br />";
        }
        elseif ($autorisation_entrer == false) 
        {
           echo "Tu n'as pas le droit d'entrer !";
        }
        ?>

        <?php 
        $autorisation_entrer = false;
        if ($autorisation_entrer)
        {
            echo "Bienvenue petit nouveau :o)<br />";
        }
        else
        {
            echo "Tu n'as pas le droit d'entrer !";
        }
        ?>

        
        <?php 
        $autorisation_entrer = false;
        if ($autorisation_entrer == true)
        {
            echo "Bienvenue petit nouveau :o)<br />";
        }
        elseif ($autorisation_entrer == false)
        {
            echo "Tu n'as pas le droit d'entrer sur ce site car ce n'est que pour les enfants de moins de 13 ans !";
        }
        ?>

        <?php
        $autorisation_entrer = true;
        if ($autorisation_entrer)
        {
            echo "Bienvenue petit nouveau :o)<br />";
        }
        else
        {
            echo "Tu n'as pas le droit d'entrer !";
        }
        ?>

        <?php 
        $autorisation_entrer = true;
        if (! $autorisation_entrer)
        {
            echo "Tu n'as pas le droit d'entrer !";
        }
        ?>

        <?php 
        $pays = "Congo";
        if ($pays == "France" OR $pays == "Belgique")
        {
            echo "Bienvenue sur notre site";
        }
        else
        {
            echo "Désolés, notre service n'est pas encore disponible dans votre pays !";
        }
        ?>

        <?php 
        $variable = 23;
        if ($variable == 23)
        {
        ?>
        <strong>Bravo !<strong> Vous avez trouvé le nombre mystère !
        <?php
        }
        ?>
    </body>
</html>