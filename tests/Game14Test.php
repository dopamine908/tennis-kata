<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game14;

class Game14Test extends TestCase
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

    /**
     * @test
     */
    public function first_player_adv()
    {
        $this->givenDeuce();
        $this->givenFirstPlayerScore(1);
        $this->scoreShouldBe('First Player Adv');

    }

    /**
     * @test
     */
    public function second_player_adv()
    {
        $this->givenDeuce();
        $this->givenSecondPlayerScore(1);
        $this->scoreShouldBe('Second Player Adv');

    }

    /**
     * @test
     */
    public function first_player_win()
    {
        $this->givenDeuce();
        $this->givenFirstPlayerScore(2);
        $this->scoreShouldBe('First Player Win');

    }

    /**
     * @test
     */
    public function second_player_win()
    {
        $this->givenDeuce();
        $this->givenSecondPlayerScore(2);
        $this->scoreShouldBe('Second Player Win');

    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game14();
    }

    /**
     * @param $score
     * @return void
     */
    private function scoreShouldBe($score): void
    {
        $this->assertEquals($score, $this->game->score());
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
