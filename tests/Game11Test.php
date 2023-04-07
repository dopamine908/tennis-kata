<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game11;

class Game11Test extends TestCase
{
    /**
     * @test
     */
    public function love_all()
    {
        $game = new Game11();
        $this->assertEquals('Love All', $game->score());
    }

}
