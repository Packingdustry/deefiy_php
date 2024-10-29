<?php
declare(strict_types=1);
require_once "AlbumTrack.php";
require_once "AudioTrack.php";
require_once "Renderer.php";
require_once "AudioTrackRenderer.php";

class AlbumTrackRenderer extends AudioTrackRenderer {

    public function __construct(AlbumTrack $albumTrack) {
        parent::__construct($albumTrack);
    }

    protected function renderLong(): string {
        $res = parent::renderLong();
        $res = $res . "
            <p>Album : ". $this->audioTrack->album ."</p>
            <p>piste n° : ". $this->audioTrack->numeroPiste ."</p>
        ";
        return $res;
    }
}
?>
