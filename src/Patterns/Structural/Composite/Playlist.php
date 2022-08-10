<?php

namespace Patterns\Structural\Composite;

class Playlist implements PlayerInterface
{

    /**
     * @var array<PlayerInterface> $songs
     */
    protected $songs = [];


    /**
     * @var int $current
     */
    protected $current = 0;

    public function addTrack(PlayerInterface $song): bool
    {
        $this->songs[] = $song;
        return true;
    }
    public function play(): string
    {
        return $this->songs[$this->current]->play();
    }

    public function next(): string
    {
        if (isset($this->songs[$this->current + 1])) {
            $this->current += 1;
            return $this->play();
        }
        return $this->play();
    }
    public function previous(): string
    {
        if ($this->current > 0) {
            $this->current -= 1;
            return $this->play();
        }
        return $this->play();
    }
}
