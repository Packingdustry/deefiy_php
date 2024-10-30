<?php
declare(strict_types=1);
require_once "AudioTrack.php";
require_once "PodcastTrack.php";
require_once "AlbumTrack.php";
require_once "Renderer.php";

class AudioTrackRenderer implements Renderer {
    protected AudioTrack $audioTrack;

    public function __construct(AudioTrack $audioTrack) {
        $this->audioTrack = $audioTrack;
    }

    public function render(int $selector): string {
        if ($selector == Renderer::COMPACT) {
            return $this->renderCompact();
        } else {
            return $this->renderLong();
        }
    }

    private function renderCompact(): string {
        return "<h3>{$this->audioTrack->titre}</h3><p>{$this->audioTrack->nomFichier}</p>";
    }

    protected function renderLong(): string {
        $res = "
            <h3>Titre : {$this->audioTrack->titre}</h3>
            <p>Auteur : {$this->audioTrack->auteur}</p>
            <p>Genre : {$this->audioTrack->genre}</p>
            <p>Chemin du fichier : {$this->audioTrack->nomFichier}</p>
            <p>Année de sortie : {$this->audioTrack->date}</p>
            <p>Durée : {$this->audioTrack->duree}</p>
        ";
        return $res;
    }
}
?>
