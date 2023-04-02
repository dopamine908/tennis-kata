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
        $this->givenSecondPlayerScore(1);
        $this->scoreShouldBe('Love Fifteen');
    }


    /**
     * @test
     */
    public function love_thirty()
    {
        $this->givenSecondPlayerScore(2);
        $this->scoreShouldBe('Love Thirty');
    }


    /**
     * @test
     */
    public function love_forty()
    {
        $this->givenSecondPlayerScore(3);
        $this->scoreShouldBe('Love Forty');
    }


    /**
     * @test
     */
    public function fifteen_all()
    {
        $this->givenFirstPlayerScore(1);
        $this->givenSecondPlayerScore(1);
        $this->scoreShouldBe('Fifteen All');
    }


    /**
     * @test
     */
    public function thirty_all()
    {
        $this->givenFirstPlayerScore(2);
        $this->givenSecondPlayerScore(2);
        $this->scoreShouldBe('Thirty All');
    }


    /**
     * @test
     */
    public function deuce()
    {
        $this->givenDeuce();
        $this->scoreShouldBe('Deuce');
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
     * @param int $times
     * @return void
     */
    private function givenFirstPlayerScore(int $times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->game->addFirstPlayerScore();
        }
    }

    /**
     * @param int $times
     * @return void
     */
    private function givenSecondPlayerScore(int $times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->game->addSecondPlayerScore();
        }
    }

    /**
     * @return void
     */
    private function givenDeuce(): void
    {
        $this->givenFirstPlayerScore(3);
        $this->givenSecondPlayerScore(3);
    }
}

