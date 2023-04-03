<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game07;

class Game07Test extends TestCase
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
        $this->game = new Game07();
    }
}
