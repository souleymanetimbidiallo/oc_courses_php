<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
        label{
            display: block;
            width: 75px;
            float: left;
        }
        .button{
            margin-left: 80px;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        </style>
    </head>
    <body>
        <a href="minichat.php">Rafraichir la page</a>
        <form method="POST" action="minichat_post.php">
            <h1>Mon Minichat:</h1>
            <label for="pseudo">Pseudo:</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo"/><br/><br/>
            <label for="message">Message:</label>
            <input type="text" name="message" id="message" placeholder="Entrez votre message"/><br/>
            <input type="submit" value="Envoyer" class="button"/>
        </form>
        <div>
        <?php
            $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $req = $bdd -> query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 10');
            while($donnees = $req -> fetch()){
                echo '<strong>'.htmlspecialchars($donnees['pseudo']).'</strong>:  <em>'.htmlspecialchars($donnees['message']).'</em><br>';
            }
            $req-> closeCursor();
        ?>
        </div>
    </body>
</html>