<?php

namespace Test;

use Src\Game05;
use PHPUnit\Framework\TestCase;

class Game05Test extends TestCase
{
    public function testLoveAll()
    {
        $game=new Game05();
        $this->assertEquals('Love All', $game->score());
    }
}
