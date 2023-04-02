<?php

namespace Src;

class Game06
{

    private $firstPlayerScore = 0;
    private $scoreLookUp = ["Love", "Fifteen", "Thirty", "Forty"];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore >= 1) {
            return "{$this->scoreLookUp[$this->firstPlayerScore]} Love";
        }

        if ($this->secondPlayerScore === 1) {
            return "Love {$this->scoreLookUp[$this->secondPlayerScore]}";
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
