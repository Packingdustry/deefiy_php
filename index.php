<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TD 3</title>
    </head>
    <body>
        <?php
        $playlist = ["nom" => "my personal best of", "genre" => "rock", "createur" => "john doe", "date" => "28-08-2022", "nbpistes" => 0, "duree" => 0, "pistes" => []];

        $pisteA = ["titre" => "a", "artiste" => "a", "album" => "a", "annee" => 2000, "genre" => "a", "numero" => 3, "duree" => 180];
        $pisteB = ["titre" => "b", "artiste" => "b", "album" => "b", "annee" => 1990, "genre" => "b", "numero" => 5, "duree" => 120];
        $pisteC = ["titre" => "c", "artiste" => "c", "album" => "c", "annee" => 2010, "genre" => "c", "numero" => 2, "duree" => 150];

        function display(array $playlist) {
            echo "playlist : {$playlist["nom"]} ({$playlist["genre"]}) <br>\n";
            echo "par {$playlist["createur"]} le {$playlist["date"]} <br>\n";
            echo "{$playlist["nbpistes"]} pistes pour une durée totale de {$playlist["duree"]} <br>\n";
            $i = 1;
            foreach ($playlist["pistes"] as $piste) {
                echo $i++ . " - ";
                display_track($piste);
            }
        }

        function display_track(array $piste, ?string $affichage="court") {
            if (isset($affichage)){
                switch ($affichage) {
                    case "complet":
                        echo "{$piste["numero"]} - {$piste["titre"]} - {$piste["artiste"]} - {$piste["album"]} - {$piste["duree"]} <br>\n";
                        break;
                    case "étendu":
                        echo "{$piste["numero"]} - {$piste["titre"]} - {$piste["artiste"]} - {$piste["album"]} - {$piste["duree"]} - {$piste["annee"]} - {$piste["genre"]}<br>\n";
                        break;
                    default: // affichage court
                        echo "{$piste["titre"]} - {$piste["artiste"]} - {$piste["album"]} <br>\n";
                        break;
                }
            } else {
                echo "couccou";
            }
        }

        function play_track(array $piste) {
            echo "{$piste["titre"]} <br>\n";
            for ($i = 1; $i<= $piste["duree"]; $i++) {
                echo "$i.";
            }
            echo '<br>';
        }

        function add_track(array $playlist, array $piste): array {
            $playlist["nbpistes"] += 1;
            $playlist["duree"] += $piste["duree"];
            $playlist["pistes"][] = $piste;
            return $playlist;
        }

        function play(array $playlist) {
            foreach ($playlist["pistes"] as $piste) {
                play_track($piste);
            }
        }

        function remove_track(array $playlist, int $numero) : array{
            $playlist["nbpistes"] -= 1;
            $playlist["duree"] -= $playlist["pistes"][$numero]["duree"];
            unset($playlist["pistes"][$numero]);
            return $playlist;
        }

        function pl_shuffle(array $playlist) : array {
            shuffle($playlist["pistes"]);
            return $playlist;
        }
        ?>
    </body>
</html>