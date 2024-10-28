<?php
class AlbumTrack {
    public string $titre, $artiste, $album, $genre, $nomFichier;
    public int $annee, $numeroPiste, $duree;

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
