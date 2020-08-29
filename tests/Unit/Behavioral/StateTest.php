<?php declare (strict_types = 1);

namespace Tests\Unit\Behavioral;

use Patterns\Behavioral\State\Mutators\Pending; 
use Patterns\Behavioral\State\Mutators\Published; 
use Patterns\Behavioral\State\Mutators\Rejected; 
use Patterns\Behavioral\State\Article; 
use PHPUnit\Framework\TestCase;

final class StateTests extends TestCase
{

    public function testIfStateIsChangingCorrectly()
    {
        $post = new Article(new Pending());
        $this->assertEquals('pending', $post->getStatus());

        $post->setStatus(new Published());
        $this->assertEquals('published', $post->getStatus());

        $post->setStatus(new Rejected());
        $this->assertEquals('rejected', $post->getStatus());
    }
}