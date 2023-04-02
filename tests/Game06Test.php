<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game06;

class Game06Test extends TestCase
{
    private $game;

    /**
     * @test
     */
    public function love_all()
    {
        $this->scoreShouldBe('Love All');
    }


    /**
     * @test
     */
    public function fifteen_love()
    {
        $this->givenFirstPlayerScore(1);
        $this->scoreShouldBe('Fifteen Love');
    }


    /**
     * @test
     */
    public function thirty_love()
    {
        $this->givenFirstPlayerScore(2);
        $this->scoreShouldBe('Thirty Love');
    }


    /**
     * @test
     */
    public function forty_love()
    {
        $this->givenFirstPlayerScore(3);
        $this->scoreShouldBe('Forty Love');
    }


    /**
     * @test
     */
    public function love_fifteen()
    {
        $this->game->addSecondPlayerScore();
        $this->scoreShouldBe('Love Fifteen');
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game06();
    }

    /**
     * @param $expectedScore
     * @return void
     */
    private function scoreShouldBe(string $expectedScore): void
    {
        $this->assertEquals($expectedScore, $this->game->score());
    }

    /**
     * @param $times
     * @return void
     */
    private function givenFirstPlayerScore(int $times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->game->addFirstPlayerScore();
        }
    }
}

