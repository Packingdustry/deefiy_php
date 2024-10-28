<?php
declare(strict_types=1);
require_once "AudioTrack.php";
class PodcastTrack extends AudioTrack{
    public function __construct(string $titre, string $nomFichier) {
        parent::__construct($titre, $nomFichier);
    }
}
?>
