<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Utilisation des boucles:</h1>
        <?php
            //boucle while
            $i=1;
            while($i<=10){?>
        <p>Je ne bavarderais plus en classe. <?php echo $i ?> fois  </p>
        <?php
            $i++;
            }
            //boucle for
            for($j=1; $j<=5; $j++){
                echo '<p>Je suis Souleymane SD Diallo</p>';
            }
        ?>
    </body>
</html>