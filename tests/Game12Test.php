<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game12;

class Game12Test extends TestCase
{
    /**
     * @test
     */
    public function love_all()
    {
        $game = new Game12();
        $this->assertEquals('Love All', $game->score());

    }

}
