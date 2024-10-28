<?php
declare(strict_types=1);
require_once "AlbumTrack.php";
require_once "AudioTrack.php";

class AlbumTrackRenderer {
    private AlbumTrack $albumTrack;

    public function __construct(AlbumTrack $albumTrack) {
        $this->albumTrack = $albumTrack;
    }

    public function render(int $selector): string {
        if ($selector == 1) {
            return $this->renderCompact();
        } else {
            return $this->renderLong();
        }
    }

    private function renderCompact(): string {
        return "<h3>{$this->albumTrack->titre}</h3><p>{$this->albumTrack->artiste}</p>";
    }

    private function renderLong(): string {
        $res = "
            <h3>{$this->albumTrack->titre}</h3>
            <p>{$this->albumTrack->artiste}</p>
            <p>{$this->albumTrack->album}</p>
            <p>{$this->albumTrack->genre}</p>
            <p>{$this->albumTrack->nomFichier}</p>
            <p>{$this->albumTrack->annee}</p>
            <p>{$this->albumTrack->numeroPiste}</p>
            <p>{$this->albumTrack->duree}</p>
        ";
        return $res;
    }
}
?>
