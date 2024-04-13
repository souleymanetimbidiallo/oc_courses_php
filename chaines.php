<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des fonctions pour les chaînes de caractères :</h1>
        <?php
            $mot = 'Anticonstitutionnellement';
            echo $mot;
            echo '<p>Ce mot contient '.strlen($mot).' caractères !</p>';
            echo '<p>Le mot melangé est : '.str_shuffle($mot);
            echo '<p>Le mot en majuscules est : '.strtoupper($mot);
            echo '<p>Le mot en miniscules est : '.strtolower($mot);
            echo '<p>Le nouveau mot remplacé est : '.str_replace('n', 'x', 'Anticonstitutionnellement');
        ?>
    </body>
</html>