<?php

namespace Src;

class Game07
{

    private $firstPlayerScore = 0;
    private $scoreLookUp = ["Love", "Fifteen", "Thirty", "Forty"];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            if ($this->firstPlayerScore === 1) {
                return 'Fifteen All';
            }
            return 'Love All';
        }

        if ($this->firstPlayerScore >= 1 || $this->secondPlayerScore >= 1) {
            return "{$this->scoreLookUp[$this->firstPlayerScore]} {$this->scoreLookUp[$this->secondPlayerScore]}";
        }
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
