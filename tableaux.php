<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des tableaux :</h1>
        <?php
            $tab = array('souleymane', 'mamadou', 'saliou', 'kadiatou');
            for($i=0; $i<4; $i++){
                echo '<h3>'.$tab[$i].'</h3>';
            }
            foreach($tab as $element){
                echo '<p>'.$element.'</p>';
            }
            echo print_r($tab);
        ?>
        <h1>Utilisation des tableaux associatifs :</h1>
        <?php
            $personne = array('nom'=>'Diallo', 'prenom'=>'Souleymane', 'age'=>20);
            foreach($personne as $libelle => $info){
                echo '<p> '.$libelle.' : '.$info.'</p>';
            }
            print_r($personne);
        ?>
    </body>
</html>