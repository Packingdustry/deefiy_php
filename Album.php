<?php
declare(strict_types=1);
require_once("InvalidPropertyValueException.php");
require_once("InvalidPropertyNameException.php");
require_once("AudioList.php");
class Album extends AudioList {
    private string $artiste;
    private int $dateSortie;
    
    public function __construct(string $nom, array $pistes) {
        $this->nom = $nom;
        $this->pistes = $pistes;
        $this->nbPistes = count($pistes);
        $tmp = 0;
        foreach ($pistes as $piste) {
            $tmp += $piste->duree;
        }
        $this->dureeTotale = $tmp;
    }

    public function __set(string $name, string|int $value) {
        if ($name == "artiste" || $name == "dateSortie") {
            $this->$name = $value;
        } else {
            throw new InvalidPropertyNameException("Invalid property : $name");
        }
    }
}
?>