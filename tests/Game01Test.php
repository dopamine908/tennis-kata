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
    public function testFifteenLove()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $this->assertEquals('Fifteen Love', $game->score());
    }
    public function testThirtyLove()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Thirty Love', $game->score());
    }
    public function testFortyLove()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Forty Love', $game->score());
    }
}
