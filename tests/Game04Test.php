<?php

namespace Test;

use Src\Game04;
use PHPUnit\Framework\TestCase;

class Game04Test extends TestCase
{
    public function testLoveAll()
    {
        $game=new Game04();
        $this->assertEquals('Love All', $game->score());
    }

    public function testFifteenLove()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $this->assertEquals('Fifteen Love', $game->score());
    }

    public function testThirtyLove()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $this->assertEquals('Thirty Love', $game->score());
    }

    public function testFortyLove()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $this->assertEquals('Forty Love', $game->score());
    }
}
