<?php

namespace Src;

class Game06
{

    private $firstPlayerScore = 0;
    private $scoreLookUp = ["Love", "Fifteen", "Thirty", "Forty"];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            if ($this->firstPlayerScore >= 3) {
                return 'Deuce';
            }
            return "{$this->scoreLookUp[$this->firstPlayerScore]} All";
        }

        if ($this->firstPlayerScore >= 1 || $this->secondPlayerScore >= 1) {
            if ($this->secondPlayerScore >= 3) {
                if ($this->firstPlayerScore - $this->secondPlayerScore === 1) {
                    return 'First Player Adv';
                }
            }

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
