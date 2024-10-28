<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deefiy</title>
    </head>
    <body>
        <?php
            require_once "AlbumTrack.php";

            $track1 = new AlbumTrack("Rubi", "rubi.mp3");
            $track2 = new AlbumTrack("Encore une", "encore_une.mp3");

            echo $track1 . "<br>";
            print $track2 . "<br>";
            printf("%s<br>", $track1);
            // echo == print mais printf est différent (impression formatée similaire au printf en C). 

            print_r($track1);
            echo "<br>";
            var_dump($track1);
            // print_r n'affiche que les attributs initialisés, tandis que var_dump affiche tout. 

            
        ?>
    </body>
</html>