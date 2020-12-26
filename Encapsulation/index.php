<?php

class Video
{
    private string $type;
    private float $duration;
    private bool $published = false;
    private string $title;
    private bool $playStatus;

    public function __construct(string $type, float $duration, string $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play()
    {
        if ($this->getPublished()) {
            $this->playStatus = true;
            return "the video is playing";
        }
        return "the video is not yet available";
    }

    public function pause()
    {
        return $this->published ? 'the video is paused' : '';
    }

    /**
     * Get the value of published
     */
    private function getPublished()
    {
        return $this->published;
    }

    /**
     * Set the value of published
     *
     * @return  self
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}

$video = new Video('mp4', 10.30, 'introduction to oop');
$video->setPublished(true);
echo $video->getTitle(), PHP_EOL, $video->play(), PHP_EOL, $video->pause(), PHP_EOL;
