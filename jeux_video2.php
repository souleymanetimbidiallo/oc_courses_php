<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8"/>
        <title>Jeux Videos</title>
        <link rel="stylesheet" href="site_style.css"/>
    </head>

    <body>
        <?php
            try
            {
                $bdd = new PDO ('mysql:host=localhost;dbname=test','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch(Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }
            $req = $bdd-> query('SELECT UPPER(nom) AS nom_majuscule, console, prix FROM jeux_video');
            /*
            $req = $bdd-> query('SELECT LOWER(nom) AS nom_miniscule, console, prix FROM jeux_video');
            $req = $bdd-> query('SELECT LENGTH(nom) AS longueur_nom, console, prix FROM jeux_video');
            $req = $bdd-> query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');
            $req = $bdd-> query('SELECT SUM(prix) AS somme_prix FROM jeux_video');
            $req = $bdd-> query('SELECT MAX(prix) AS prix_maximum FROM jeux_video');
            $req = $bdd-> query('SELECT MIN(prix) AS prix_minimum FROM jeux_video');
            $req = $bdd-> query('SELECT COUNT(*) FROM jeux_video');
            $req = $bdd-> query('SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video');
            */
            while($donnees = $req -> fetch()){
                echo '<p>'.$donnees['console'].'-'.$donnees['nom_majuscule'].'-'.$donnees['prix'].'euros</p>';
            }
            $req->closeCursor();
        ?>
    </body>
</html>