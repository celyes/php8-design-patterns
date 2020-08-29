<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Structural;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Composite\Playlist;
use Patterns\Structural\Composite\Components\Track;

final class CompositeTest extends TestCase 
{
   
    public function testIfSongsCanBeAddedToPlaylist()
    {
        $playlist = new Playlist();
        $playlist->addTrack(new Track("Stellardrone", "Echoes", "/music/echoes.mp3"));
        $this->assertEquals("/music/echoes.mp3", $playlist->play()); 
    }   
    public function testIfNextTrackPlays()
    {
        $playlist = new Playlist();
        $playlist->addTrack(new Track("Stellardrone", "Echoes", "/music/echoes.mp3"));
        $playlist->addTrack(new Track("Stellardrone", "Pale Blue Dot", "/music/pale-blue-dot.mp3"));
        $playlist->next();
        $this->assertEquals("/music/pale-blue-dot.mp3", $playlist->play());
    }
       
    public function testIfPreviousTrackPlays()
    {
        $playlist = new Playlist();
        $playlist->addTrack(new Track("Stellardrone", "Echoes", "/music/echoes.mp3"));
        $playlist->addTrack(new Track("Green Piccolo", "God Damn Tape", "/music/god-damn-tape.mp3"));
        $playlist->addTrack(new Track("Stellardrone", "Pale Blue Dot", "/music/pale-blue-dot.mp3"));
        $playlist->next();
        $playlist->next();
        $playlist->previous();
        $this->assertEquals("/music/god-damn-tape.mp3", $playlist->play());
    }
} 