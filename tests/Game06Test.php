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
}

