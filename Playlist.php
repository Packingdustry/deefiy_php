<?php
declare(strict_types=1);
require_once("InvalidPropertyValueException.php");
require_once("InvalidPropertyNameException.php");
require_once("AudioList.php");
require_once("AudioTrack.php");

class Album extends AudioList {
    public function ajouterPiste(AudioTrack $piste) {
        $this->pistes[] = $piste;
    }

    public function ajouterPistes(array $pistes) {
        foreach ($pistes as $cle => $piste) {
            if (in_array($piste, $this->pistes)) {
                unset($pistes[$cle]);
            }
        }
        array_merge($this->pistes, $pistes);
    }

    public function retirerPiste(AudioTrack $pisteARetirer) {
        foreach ($pistes as $cle => $piste) {
            if ($piste == $pisteARetirer) {
                unset($pistes[$cle]);
            }
        }
    }
}
?>