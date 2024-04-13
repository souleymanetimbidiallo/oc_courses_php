<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Envoi de fichier en php (2): </h1>
        <?php
            if(isset($_FILES['monFichier']) AND $_FILES['monFichier']['error']==0){
                if($_FILES['monFichier']['size'] <= 1000000){
                    $infosfichier = pathinfo($_FILES['monFichier']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                    if(in_array($extension_upload, $extensions_autorisees)){
                        move_uploaded_file($_FILES['monFichier']['tmp_name'], 'uploads/'.basename($_FILES['monFichier']['name']));
                        echo "L'envoi a bien été effectué !";
                    }
                }
            }
        ?>
    </body>
</html>