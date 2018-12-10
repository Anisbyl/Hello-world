<!DOCTYPE htlm>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Les conditions en php</title>
    </head>
    <body>
        <?php
        $note = 15;
        
        if ($note == 0)
        {
            echo "Tu es vraiment un gros nul !!!";
        }
        
        elseif ($note == 5)
        {
            echo "Tu es très mauvais.";
        }
        
        elseif ($note == 7)
        {
            echo "Tu es mauvais.";
        }
        
        elseif ($note == 10)
        {
            echo "Tu as pile poil la moyenne, c'est un peu juste...";
        }
        
        elseif ($note == 12)
        {
            echo "Tu es assez bon.";
        }
        
        elseif ($note == 16)
        {
            echo "Tu te débrouilles très bien !";
        }
        
        elseif ($note == 20)
        {
           echo "Excellent travail, c'est parfait !";
        }
        
        else
        {
            echo "Désolé, je n'ai pas de message à afficher pour cette note !";
        }
        ?>
    
    </body>
</html>