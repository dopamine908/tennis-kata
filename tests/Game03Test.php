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
        $game=new game03();
        $game->addSecondPlayerScore();
        $this->assertequals('Love Fifteen', $game->score());
    }
    public function testLoveThirty()
    {
        $game=new game03();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Love Thirty', $game->score());
    }
    public function testLoveForty()
    {
        $game=new game03();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Love Forty', $game->score());
    }
    public function testFifteenAll()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Fifteen All', $game->score());
    }
    public function testThirtyAll()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Thirty All', $game->score());
    }
    public function testDuece3()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Deuce', $game->score());
    }
    public function testDuece4()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Deuce', $game->score());
    }
    public function testFirstPlayerAdvCase1()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('First Player Adv', $game->score());
    }
    public function testFirstPlayerAdvCase2()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('First Player Adv', $game->score());
    }
    public function testSecondPlayerAdvCase1()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Second Player Adv', $game->score());
    }
    public function testSecondPlayerAdvCase2()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('Second Player Adv', $game->score());
    }
    public function testFirstPlayerWinWithDuece()
    {
        $game=new game03();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addFirstPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $game->addSecondPlayerScore();
        $this->assertequals('First Player Win', $game->score());
    }
}
