<?php
declare(strict_types=1);
require_once "AudioTrack.php";
require_once "PodcastTrack.php";
require_once "AlbumTrack.php";
require_once "AudioTrackRenderer.php";
require_once "Renderer.php";

class AudioTrackRenderer implements Renderer {
    protected AudioList $audioList;

    public function __construct(AudioList $audioList) {
        $this->audioList = $audioList;
    }

    public function render(int $selector): string {
        $res = "";
        foreach ($audioList->pistes as $audioTrack) {
            $renderer = new AudioTrackRenderer($audioTrack);
            $res .= $renderer->render($selector);
        }
        return $res;
    }
}
?>
