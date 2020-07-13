<?php

namespace Patterns\Structural\Composite;

class Playlist implements PlayerInterface
{

    protected $songs = [];
    protected $current = 0;

    public function addTrack(PlayerInterface $song): bool
    {
        $this->songs[] = $song;
        return true;
    }
    public function play() 
    {
        return $this->songs[$this->current]->play();
    }

    public function next()
    {
        if(isset($this->songs[$this->current + 1])){
            $this->current += 1;
            return $this->play();
        }
        return $this->play();
    }
    public function previous()
    {
        if($this->current > 0){
            $this->current -= 1;
            return $this->play();
        }
        return $this->play();
    }
}