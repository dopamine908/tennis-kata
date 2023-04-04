<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Game08;

class Game08Test extends TestCase
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
        $this->game->addFirstPlayerScore();
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
        $this->game = new Game08();
    }
}
