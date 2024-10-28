<?php
declare(strict_types=1);
require_once "AudioTrack.php";
require_once "PodcastTrack.php";
require_once "Renderer.php";
require_once "AudioTrackRenderer.php";

class PodcastRenderer extends AudioTrackRenderer implements Renderer {
    private PodcastTrack $podcastTrack;

    public function __construct(PodcastTrack $podcastTrack) {
        parent::__construct($podcastTrack);
    }
}
?>
