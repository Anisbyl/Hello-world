<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Boucles en PHP</title>
    </head>
    <body>
        <?php
        $nombre_de_lignes = 1;
        while ($nombre_de_lignes <= 10)
        {
            echo "Je ne dois regarder les mouches voler quand j\'apprends le PHP. <br \><br \>";
            $nombre_de_lignes++;
        }
      ?>

        <?php 
        $nombre_de_lignes = 1;

        while ($nombre_de_lignes < 20)
        {
            echo 'Ceci est la ligne n°'.$nombre_de_lignes.'<br \><br \>';
            $nombre_de_lignes++;
        }
        ?>

        <?php
        for ($nombre_de_lignes = 2; $nombre_de_lignes <= 20; $nombre_de_lignes = $nombre_de_lignes+2)
        {
            echo 'Ceci est la ligne n°'.$nombre_de_lignes.'<br \>';
        }

        ?>


    </body>
</html>