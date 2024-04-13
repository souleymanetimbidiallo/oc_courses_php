<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Envoi de fichier en php (1): </h1>
        <form method="POST" action="envoiFichier2.php" enctype="multipart/form-data">
            <label for="monFichier">Entrer une image:</label>
            <input type="file" name="monFichier" id="monFichier"/><br/><br/>
            <input type="submit" value="Envoyer"/>
        </form>
    </body>
</html>