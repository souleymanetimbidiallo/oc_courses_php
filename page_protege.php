<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Page securisée par un mot de passe</h1>
        <?php
            if(!isset($_POST['password']) OR $_POST['password']!='qwerty'){
        ?>
        <form method="POST" action="page_protege.php">
            <label for="password">Entrer le mot de passe pour obtenir les codes d'accès :</label>
            <input type="password" name="password" id="password"/><br/><br/>
            <input type="submit" value="Valider"/>
        </form>
        <p>
            Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, 
            inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)
        </p>
        <?php }else{
        ?><h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>
        <p>
            Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter 
            régulièrement car les codes d'accès sont changéstoutes les semaines.<br />
            La NASA vous remercie de votre visite.
        </p>
        <?php }
        ?>
    </body>
</html>