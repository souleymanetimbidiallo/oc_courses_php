<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Utisation des conditions: </p>
        <?php
            //condition if
            $age = 25;
            if($age<18){
            ?>
                <p>Vous êtes un enfant !</p>
            <?php 
            }else if($age<60){?>
                <p>Vous êtes un adulte !</p>
            <?php 
            }else{ ?>
                <p>Vous êtes un vieillard</p>';
            <?php } 
                //condition switch
                $val = 10;
                switch($val){
                    case 1:
                        echo 'Vous avez choisi la valeur 1';
                        break;
                    case 2:
                        echo 'Vous avez choisi la valeur 2';
                        break;
                    case 3:
                        echo 'Vous avez choisi la valeur 3';
                        break;
                    default:
                        echo 'Vous avez choisi une autre valeur';
                }
            ?>
            
    </body>
</html>