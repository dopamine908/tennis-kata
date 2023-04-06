<?php

namespace Src;

class Game10
{

    private $firstPlayerScore = 0;
    private $secondPlayerScore = 0;
    private $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',
    ];

    public function score()
    {
        if ($this->firstPlayerScore >= 1) {
            return "{$this->scoreLookup[$this->firstPlayerScore]} Love";
        }

        if ($this->secondPlayerScore === 1) {
            return "Love Fifteen";
        }

        if ($this->secondPlayerScore === 2) {
            return "Love Thirty";
        }


        return 'Love All';
    }

    public function addFirstPayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }
}
