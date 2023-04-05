<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game09;

class Game09Test extends TestCase
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
     * @param $score
     * @return void
     */
    private function scoreShouldBe($score): void
    {
        $this->assertEquals($score, $this->game->score());
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game09();
    }

    /**
     * @param $times
     * @return void
     */
    private function givenFirstPlayerScore($times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->game->addFirstPlayerScore();
        }
    }

    /**
     * @param $times
     * @return void
     */
    private function givenSecondPlayerScore($times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->game->givensecondplayerscore();
        }
    }
}
