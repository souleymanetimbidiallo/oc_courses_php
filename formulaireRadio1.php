<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Formulaire avec radio button :</h1>
        <form method="POST" action="formulaireRadio2.php">
            Sexe :
            <input type="radio" name="sexe" id="homme" value="Homme"/><label for="homme">Homme</label>
            <input type="radio" name="sexe" id="femme" value="Femme"/><label for="femme">Femme</label>
            <input type="radio" name="sexe" id="autre" value="Autre"/><label for="autre">Autre</label>
            <input type="submit" value="Envoyer"/>
        </form>
    </body>
</html>