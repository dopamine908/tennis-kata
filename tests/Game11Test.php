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
        $this->game->addFirstPlayerScore();
        $this->scoreShouldBe('Fifteen Love');
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

}
