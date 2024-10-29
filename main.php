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
            require_once "AudioTrack.php";
            require_once "PodcastTrack.php";
            require_once "AlbumTrackRenderer.php";
            require_once "AudioTrackRenderer.php";
            require_once "PodcastRenderer.php";

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

            $podcast1 = new PodcastTrack("Hondelatte raconte", "hondelatte_raconte.mp3");
            echo "<br>\$podcast1 : $podcast1<br>";
            var_dump($podcast1);

            try {
                $albumRenderer = new AlbumTrackRenderer($track1);
                $podcastRenderer = new PodcastRenderer($podcast1);
                echo "<br><br>";
                echo $albumRenderer->render(1);
                echo $podcastRenderer->render(1);

                echo "<br>";
                echo $podcastRenderer->render(2);
                echo $albumRenderer->render(2);
            } catch (Exception $e) {
                echo "<p>Problème :  {$e->getMessage()}. </p>";
            }
        ?>
    </body>
</html>