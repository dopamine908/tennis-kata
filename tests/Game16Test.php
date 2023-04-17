<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game16;

class Game16Test extends TestCase
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
        $this->game = new Game16();
    }

    /**
     * @param $score
     * @return void
     */
    private function scoreShouldBe($score): void
    {
        $this->assertEquals('' . $score . '', $this->game->score());
    }
}
