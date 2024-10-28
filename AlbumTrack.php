<?php
declare(strict_types=1);
require_once "AudioTrack.php";
class AlbumTrack extends AudioTrack{
    public string $album;
    public int $numeroPiste;

    public function __construct(string $titre, string $nomFichier) {
        parent::__construct($titre, $nomFichier);
        $this->album="Rubi";
        $this->numeroPiste=3;
    }
}
?>
