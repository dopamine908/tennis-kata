<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game11;

class Game11Test extends TestCase
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

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game11();
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

}
