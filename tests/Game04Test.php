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

    public function testLoveFifteen()
    {
        $game=new Game04();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Fifteen', $game->score());
    }

    public function testLoveThirty()
    {
        $game=new Game04();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Thirty', $game->score());
    }

    public function testLoveForty()
    {
        $game=new Game04();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Forty', $game->score());
    }

    public function testFifteenAll()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Fifteen All', $game->score());
    }

    public function testThirtyAll()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Thirty All', $game->score());
    }

    public function testDeuce3()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Deuce', $game->score());
    }

    public function testDeuce4()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Deuce', $game->score());
    }

    public function testFirstPlayerAdv1()
    {
        $game=new Game04();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addFisrstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('First Player Adv', $game->score());
    }
}
