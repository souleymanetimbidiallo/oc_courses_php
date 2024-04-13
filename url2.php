<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Transmission des données avec l'URL 2</h1>
        <p>
            <?php 
                if(isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])){
                    $nbRep = (int) $_GET['repeter'];
                    if($nbRep<100 AND $nbRep>=1){
                        for($i=0; $i<$nbRep; $i++){
                            echo '<p>Bonjour '.$_GET['nom'].' '.$_GET['prenom'].'</p>';
                        }
                    }else{
                        echo '<p>le nombre doit être dans l\'intervalle de 1 à 100 !</p>';    
                    }
                }else{
                    echo '<p>Pas de nom ou prénom défini !</p>';
                }
            ?> 
        </p>
    </body>
</html>