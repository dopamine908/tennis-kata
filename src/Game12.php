<?php

namespace Src;

class Game12
{

    private $firstPlayerScore = 0;
    protected $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty'
    ];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            if ($this->firstPlayerScore === 3) {
                return 'Deuce';
            }

            return "{$this->scoreLookup[$this->firstPlayerScore]} All";
        }

        if ($this->firstPlayerScore > 3) {
            if ($this->firstPlayerScore - $this->secondPlayerScore === 1) {
                return 'First Player Adv';
            }
        }

        return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";

    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }
}
