<?php
    setcookie('nom', 'Diallo', time()+3600*24*365, null, null, false, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des cookies (1):</h1>
       <?php
        if(isset($_COOKIE['nom'])){
            echo '<p>Bienvenue Mr/Mme '.$_COOKIE['nom'].' </p>';
        }
        ?>
        <p><a href="cookie2.php">Cliquer pour aller à la page suivante</a></p>
    </body>
</html>