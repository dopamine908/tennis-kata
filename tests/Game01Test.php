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
    public function testLoveFifteen()
    {
        $game = new Game01();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Fifteen', $game->score());
    }
    public function testLoveThirty()
    {
        $game = new Game01();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Thirty', $game->score());
    }

    public function testLoveForty()
    {
        $game = new Game01();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Forty', $game->score());
    }
    public function testFifteenAll()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Fifteen All', $game->score());
    }
    public function testThirtyAll()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Thirty All', $game->score());
    }
    public function testDeuce3()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Deuce', $game->score());
    }
    public function testDeuce4()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Deuce', $game->score());
    }
    public function testFirstPlayerAdv1()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('First Player Adv', $game->score());
    }
    public function testFirstPlayerAdv2()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('First Player Adv', $game->score());
    }
    public function testSecondPlayerAdv1()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Second Player Adv', $game->score());
    }
    public function testSecondPlayerAdv2()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Second Player Adv', $game->score());
    }
    public function testFirstPlayerWinWithDuece1()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('First Player Win', $game->score());
    }
    public function testFirstPlayerWin1()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('First Player Win', $game->score());
    }
    public function testFirstPlayerWin2()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('First Player Win', $game->score());
    }
    public function testSecondPlayerWinWithDuece1()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Second Player Win', $game->score());
    }
    public function testSecondPlayerWin1()
    {
        $game = new Game01();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Second Player Win', $game->score());
    }
    public function testSecondPlayerWin2()
    {
        $game = new Game01();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Second Player Win', $game->score());
    }
}
