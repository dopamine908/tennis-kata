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
    public function testFifteenLove()
    {
        $game=new Game05();
        $game->addFirstPlayerScore();
        $this->assertEquals('Fifteen Love', $game->score());
    }
    public function testThirtyLove()
    {
        $game=new Game05();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Thirty Love', $game->score());
    }
    public function testFortyLove()
    {
        $game=new Game05();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Forty Love', $game->score());
    }
}
