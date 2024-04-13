<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['message'])){
                $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $req = $bdd -> prepare('INSERT INTO minichat(pseudo, message) VALUES (?,?)');
                $req-> execute(array($_POST['pseudo'], $_POST['message']));
                header('Location: minichat.php');
            }
        ?>
    </body>
</html>