<?php

namespace Test;

use Src\Game02;
use PHPUnit\Framework\TestCase;

class Game02Test extends TestCase
{
    public function testLoveAll()
    {
        $game=new Game02();
        $this->assertEquals('Love All', $game->score());
    }
}
