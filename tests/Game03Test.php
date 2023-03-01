<?php

namespace Test;

use Src\Game03;
use PHPUnit\Framework\TestCase;

class Game03Test extends TestCase
{
    public function testLoveAll()
    {
        $game=new Game03();
        $this->assertEquals('Love All', $game->score());
    }
    public function testFifteenLove()
    {
        $game=new Game03();
        $game->addFirstPlayerScore();
        $this->assertEquals('Fifteen Love', $game->score());
    }
    public function testThirtyLove()
    {
        $game=new Game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Thirty Love', $game->score());
    }
    public function testFortyLove()
    {
        $game=new Game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Forty Love', $game->score());
    }
    public function testLoveFifteen()
    {
        $game=new Game03();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Fifteen', $game->score());
    }
}
