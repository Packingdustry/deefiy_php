<?php
declare(strict_types=1);
require_once "AudioTrack.php";

interface Renderer {
    public const COMPACT=1;
    public const LONG=2;

    public function render(int $selector): string;
}
?>