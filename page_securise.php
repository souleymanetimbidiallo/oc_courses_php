<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulaire</title>
    </head>

    <body>
    <?php
        if (!isset($_POST['mot_de_passe']))
        { // Le mot de passe n'a pas été envoyé
    ?>
            <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
            <form action="" method="post">
                <p>
                    <input type="password" name="mot_de_passe" />
                    <input type="submit" value="Valider" />
                </p>
            </form>
            <p>Cette page est réservée au personnel de la NASA. 
                Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez 
            jamais le mot de passe ! ;-)
            </p>
    <?php
        }
        elseif(isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] !="kangourou")
        {// on affiche un message d'erreur
    ?>
            <p> Mot de passe incorrect </p>
            <p>Veuiller <a href='formulaire.php'>cliquez-ici </a> pour actualiser la page et entrer le bon <strong>Mot De Passe</strong> !</p>
    <?php
        }
        else
        {    // On affiche les codes
    ?>
        <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>
        <p>
            Cette page est réservée au personnel de la NASA. 
            N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
            La NASA vous remercie de votre visite.
        </p>
    <?php
        }
    ?>
    </body>
</html>