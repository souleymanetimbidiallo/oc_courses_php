<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Utilisation des bases de donnees: </p>
        <?php
            $bdd = new PDO ('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $reponse = $bdd->query('SELECT console,nom,prix FROM jeux_video WHERE console="PC" OR console="NES" ORDER BY prix DESC LIMIT 5');
            while($donnees = $reponse -> fetch()){
                echo '<p> '.$donnees['console'].' - '.$donnees['nom'].' - '.$donnees['prix'].' euros</p>';
            }
        ?>
    </body>
</html>