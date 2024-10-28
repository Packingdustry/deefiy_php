<?php
declare(strict_types=1);
class AudioTrack {
    public string $titre, $auteur, $genre, $nomFichier;
    public int $date, $duree;

    public function __construct(string $titre, string $nomFichier) {
        $this->titre = $titre;
        $this->nomFichier = $nomFichier;
    }

    public function __toString(): string {
        $res = json_encode($this);
        return $res;
    }
}
?>