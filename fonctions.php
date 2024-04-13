<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des fonctions propres :</h1>
        <?php
            function somme($x, $y){
                echo '<p>La somme de '.$x.' et '.$y.' est : '.($x+$y).'</p>';
            }
            somme(1,2);
            somme(5,10);
        ?>
        <h2>Volume d'un cone</h2>
        <?php
            function volumeCone($rayon, $hauteur){
                $volume = 3.14*$rayon*$rayon*$hauteur;
                return $volume;
            }
            $r=3;$h=4;
            echo '<p>Le volume d\'une cone de Rayon='.$r.'cm et de Hauteur='.$h.'cm est : '.volumeCone($r,$h).' cm<sup>3</sup>';
        ?>
    </body>
</html>