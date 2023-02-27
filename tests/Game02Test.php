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
    public function testFifteenLove()
    {
        $game=new Game02();
        $game->addFirstPlayerScore();
        $this->assertEquals('Fifteen Love', $game->score());
    }
}
