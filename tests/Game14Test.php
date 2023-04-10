<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game14;

class Game14Test extends TestCase
{
    /**
     * @test
     */
    public function love_all()
    {
        $game = new Game14();
        $this->assertEquals('Love All', $game->score());

    }
}
