<?php

namespace Src;

class Game09
{

    private $firstPlayerScore = 0;
    private $scoreLookup = ["Love", "Fifteen", "Thirty", "Forty"];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            if ($this->firstPlayerScore === 3) {
                return 'Deuce';
            }

            return "{$this->scoreLookup[$this->firstPlayerScore]} All";
        }

        if ($this->firstPlayerScore > 3 || $this->secondPlayerScore > 3) {
            if (abs($this->firstPlayerScore - $this->secondPlayerScore) === 1) {
                if ($this->firstPlayerScore > $this->secondPlayerScore) {
                    return 'First Player Adv';
                }
                return 'Second Player Adv';
            }
        }

        return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function givenSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }
}
