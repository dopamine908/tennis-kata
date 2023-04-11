<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game15;

class Game15Test extends TestCase
{
    private $game;

    /**
     * @test
     */
    public function love_all()
    {
        $this->scoreShouldBe('Love All');
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game15();
    }

    /**
     * @param $score
     * @return void
     */
    private function scoreShouldBe($score): void
    {
        $this->assertEquals($score, $this->game->score());
    }
}
