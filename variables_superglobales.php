<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des variables superglobales: </h1>
        <pre>
            <?php
                print_r($_REQUEST);
                /*
                    $_SERVER => les valeurs renvoyées par le serveur.
                    $_ENV => les variables d'environnement toujours données par le serveur.
                    $_SESSION => les variables de session.
                    $_COOKIE => les valeurs des cookies enregistrés sur l'ordinateur du visiteur.
                    $_GET => les données envoyées en paramètres dans l'URL.
                    $_POST => les informations envoyées par un formulaire.
                    $_FILES => la liste des fichiers qui ont été envoyés via le formulaire
                    $_REQUEST =>
                */
            ?>
        </pre>
    </body>
</html>