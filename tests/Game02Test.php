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
    public function testThirtyLove()
    {
        $game=new Game02();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Thirty Love', $game->score());
    }
    public function testFortyLove()
    {
        $game=new Game02();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $this->assertEquals('Forty Love', $game->score());
    }
    public function testLoveFifteen()
    {
        $game=new Game02();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Fifteen', $game->score());
    }
    public function testLoveThirty()
    {
        $game=new Game02();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Thirty', $game->score());
    }
    public function testLoveForty()
    {
        $game=new Game02();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Love Forty', $game->score());
    }
    public function testFifteenAll()
    {
        $game=new Game02();
        $game->addfirstPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Fifteen All', $game->score());
    }
    public function testThirtyAll()
    {
        $game=new Game02();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Thirty All', $game->score());
    }
    public function testDeuce3()
    {
        $game=new Game02();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Duece', $game->score());
    }
    public function testDeuce4()
    {
        $game=new Game02();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('Duece', $game->score());
    }
    public function testFirstPlayerAdv1()
    {
        $game=new Game02();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('First Player Adv', $game->score());
    }
    public function testFirstPlayerAdv2()
    {
        $game=new Game02();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addfirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertEquals('First Player Adv', $game->score());
    }
}
