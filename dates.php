<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des fonctions de date :</h1>
        <?php
            $jour = date('d');
            $mois = date('m');
            $an = date('Y');
            $heure = date('H');
            $minute = date('i');
            echo '<p>La date d\'aujourd\'hui : '.$jour.'/'.$mois.'/'.$an.'</p>';
            echo '<p>Il est : '.$heure.':'.$minute.'</p>';
        ?>
    </body>
</html>