<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game01;

class Game01Test extends TestCase
{
    public function testLoveAll()
    {
        $game = new Game01();
        $this->assertEquals('Love All', $game->score());
    }
}
