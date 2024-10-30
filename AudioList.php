<?php
declare(strict_types=1);
require_once("InvalidPropertyValueException.php");
require_once("InvalidPropertyNameException.php");
class AudioList {
    private string $nom;
    protected int $nbPistes, $dureeTotale;
    protected array $pistes;
    
    public function __construct(string $nom, ?array $pistes) {
        $this->nom = $nom;
        if (is_null($pistes)) {
            $this->pistes = array();
            $this->nbPistes = 0;
            $this->dureeTotale = 0;
        } else {
            $this->pistes = $pistes;
            $this->nbPistes = count($pistes);
            $tmp = 0;
            foreach ($pistes as $piste) {
                $tmp += $piste->duree;
            }
            $this->dureeTotale = $tmp;
        }
    }

    public function __get(string $name): mixed {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        throw new InvalidPropertyNameException("invalid property : <$name>");
    }
}
?>