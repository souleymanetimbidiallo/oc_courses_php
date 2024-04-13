<?php
    session_start();
    $_SESSION['nom']='Barry';
    $_SESSION['prenom']='Kadiatou';
    //session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des sessions (1):</h1>
       <?php
            echo '<p>Bienvenue Mr/Mme '.$_SESSION['nom'].' '.$_SESSION['prenom'].'</p>';
        ?>
        <p><a href="session2.php">Cliquer pour aller à la page suivante</a></p>
    </body>
</html>