<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8"/>
        <title>Jeux Videos</title>
        <link rel="stylesheet" href="site_style.css"/>
        <style>
            table{
                border-collapse: collapse;
                border: 2px solid black;
            }
            td,th{
                border: 2px solid black; 
                font-size: 16px;
            }
            .css1{
                text-align: center;
            }
        </style>
    </head>

    <body>
        <form action="" method="POST">
            <label for="recherche"></label>
            <input type="search" name="recherche" id="recherche" placeholder="Votre console"/>
            <input type="submit" name="btnRecherche" value="Rechercher"/>
        </form>
        <?php if(isset($_POST['recherche']) AND !empty($_POST['recherche'])){
        ?>
        <h1>Liste des jeux-videos:</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Possesseur</th>
                <th>Console</th>
                <th>Prix (en euro)</th>
                <th>Joueurs Max</th>
                <th>Commentaires</th>
            </tr>
            <?php
                try
                {
                    $bdd = new PDO ('mysql:host=localhost;dbname=test','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }
                catch(Exception $e)
                {
                    die('Erreur: '.$e->getMessage());
                }
                $req = $bdd-> prepare('SELECT * FROM jeux_video WHERE console=? ORDER BY prix DESC');
                $req -> execute(array($_POST['recherche']));
                while($donnees = $req -> fetch())
                {
            ?>
            <tr>
                <td class="css1"><?php echo $donnees['ID'];?></td>
                <td><?php echo $donnees['nom'];?></td>
                <td><?php echo $donnees['possesseur'];?></td>
                <td><?php echo $donnees['console'];?></td>
                <td class="css1"><?php echo $donnees['prix'];?></td>
                <td class="css1"><?php echo $donnees['nbre_joueurs_max'];?></td>
                <td><em><?php echo $donnees['commentaires'];?></em></td>
            </tr>
            <?php
                }
                $req->closeCursor();
            }
            ?>
        </table>
    </body>
</html>