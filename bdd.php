<html>
    <head>
        <meta charset="utf-8" />
        <title>bbd jeux_video</title>
    </head>
    <body>
<?php
	try
	{
		// On se connecte à MySQL et signaler les erreurs SQL
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}

	// On récupère tout le contenu de la table jeux_video
	$reponse = $bdd->query('SELECT * FROM jeux_video');
	
	// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
	{
?>
	<p>
		<strong>Jeu N°</strong><?php echo $donnees['ID'];?> : <?php echo $donnees['nom']; ?><br />
		Le possesseur de ce jeu est : <?php echo $donnees['possesseur'];?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
		Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
		<?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
	</p>
<?php
	}
	$reponse->closeCursor(); // Termine le traitement de la requête
?>       
    </body>
</html>