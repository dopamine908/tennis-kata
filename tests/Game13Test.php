<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game13;

class Game13Test extends TestCase
{

    /**
     * @test
     */
    public function love_all()
    {
        $game = new Game13();
        $this->assertEquals('Love All', $game->score());
    }
}
