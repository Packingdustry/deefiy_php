<?php
declare(strict_types=1);
require_once "AudioTrack.php";
class AlbumTrack extends AudioTrack{
    protected string $album;
    protected int $numeroPiste;

    public function __construct(string $titre, string $nomFichier) {
        parent::__construct($titre, $nomFichier);
        $this->album="Rubi";
        $this->numeroPiste=3;
    }

    public function jsonSerialize(): array {
        $attributs = parent::jsonSerialize();
        $attributs["album"] = $this->album;
        $attributs["numeroPiste"] = $this->numeroPiste;
        return $attributs;
    }
}
?>
