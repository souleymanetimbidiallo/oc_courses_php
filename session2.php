<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des sessions (2) :</h1>
       <?php
            echo '<p>Je me souviens de vous Mr/Mme '.$_SESSION['nom'].' '.$_SESSION['prenom'].'</p>';
        ?>
    </body>
</html>