<!DOCTYPE htlm>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Les conditions en php</title>
    </head>
    <body>
       <?php
       $note = 16;

       if ($note == 0)
       {
            echo "Tu es vraiment un gros nul !!!<br \>";
       }
       elseif ($note == 5)
       {
           echo "Tu es très mauvais<br \>";
       }
       elseif ($note == 10) 
       {
           echo "Tu as pile poil la moyenne, c'est un peu juste...<br \>";
       }
       elseif ($note == 12) 
       {
           echo "Tu es assez bon <br \>";
       }
       elseif ($note == 16) 
       {
           echo"Tu te débrouilles très bien !<br \>";
       }
       elseif ($note == 20) 
       {
           echo "Excellent travail, c'est parfait ! <br \>";
       }
       else
       {
            echo "Désolé, je n'ai pas de message à afficher pour cette note <br \>";
       }
       ?>

       <?php
       switch ($note) 
       {
           case 0:
               echo "Tu es vraiment un gros nul !!!";
               break;
            case 5:
                echo "Tu es très mauvais";
                break;
            case 10:
                echo "Tu as pile poil la moyenne, c'est un peu juste...";
                break;
            case 12:
                echo "Tu es assez bon";
                break;
            case 16:
                echo "Tu te débrouilles très bien !";
                break;
            case 20:
                echo "Excellent travail, c'est parfait";
                break;
           
           default:
               echo "Désolé, je n'ai pas de message à afficher pour cette note";       
        }
       ?>
    </body>
</html>