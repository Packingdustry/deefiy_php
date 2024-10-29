<?php
declare(strict_types=1);
require_once("InvalidPropertyValueException.php");
require_once("InvalidPropertyNameException.php");
class AudioTrack implements JsonSerializable {
    protected string $titre, $auteur, $genre, $nomFichier;
    protected int $date, $duree;

    public function __construct(string $titre, string $nomFichier) {
        $this->titre = $titre;
        $this->nomFichier = $nomFichier;
        $this->auteur="bibi";
        $this->genre="rap";
        $this->date=1970;
        $this->duree=180;
    }

    public function __toString(): string {
        $res = json_encode($this);
        return $res;
    }

    public function __get(string $name): mixed {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        throw new InvalidPropertyNameException("invalid property : <$name>");
        return null;
    }

    public function __set(string $name, mixed $value) {
        $this->$name = $value;
        if ($name == "duree" && $value < 0) {
            throw new InvalidPropertyValueException("Durée de la piste négative. ");
        }
    }

    public function jsonSerialize(): array {
        return array("titre" => $this->titre, "auteur" => $this->auteur, "genre" => $this->genre, "nomFichier" => $this->nomFichier, "date" => $this->date, "duree" => $this->duree);
    }
}
?>