<?php

class Video
{
    public string $type;
    public float $duration;
    public bool $published = false;
    public string $title;

    public function __construct(string $type, float $duration, string $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play()
    {
        return $this->published ? "the video is playing" : "the video is not yet available";
    }

    public function pause()
    {
        return $this->published ? 'the video is paused' : '';
    }
}

$video = new Video('mp4', 10.30, 'introduction to oop');
var_dump($video);
