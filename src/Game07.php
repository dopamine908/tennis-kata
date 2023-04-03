<?php

namespace Src;

class Game07
{

    private $firstPlayerScore;
    private $scoreLookUp = ["Love", "Fifteen", "Thirty", "Forty"];
    private $secondPlayerScore;

    public function score()
    {
        if ($this->firstPlayerScore >= 1) {
            return "{$this->scoreLookUp[$this->firstPlayerScore]} Love";
        }

        if ($this->secondPlayerScore === 1) {
            return "Love Fifteen";
        }

        if ($this->secondPlayerScore === 2) {
            return "Love Thirty";
        }

        return 'Love All';
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
