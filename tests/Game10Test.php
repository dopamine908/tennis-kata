<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game10;

class Game10Test extends TestCase
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
        $this->game->addFirstPayerScore();
        $this->scoreShouldBe('Fifteen Love');
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
        $this->game = new Game10();
    }
}
