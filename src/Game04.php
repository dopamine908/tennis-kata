<?php

namespace Src;

class Game04
{
    public $firstPlayerScore=0;
    public $secondPlayerScore=0;
    public function addFisrstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }
    public function score()
    {
        $lookup=[ 'Love','Fifteen','Thirty','Forty'];

        if ($this->firstPlayerScore-$this->secondPlayerScore===1&&$this->secondPlayerScore>=3) {
            return 'First Player Adv';
        }

        if ($this->secondPlayerScore-$this->firstPlayerScore===1&&$this->firstPlayerScore>=3) {
            return 'Second Player Adv';
        }

        if ($this->firstPlayerScore===$this->secondPlayerScore&&$this->firstPlayerScore>0) {
            if ($this->firstPlayerScore>=3) {
                return 'Deuce';
            }

            return "{$lookup[$this->firstPlayerScore]} All";
        }

        if ($this->firstPlayerScore>0||$this->secondPlayerScore>0) {
            return "{$lookup[$this->firstPlayerScore]} {$lookup[$this->secondPlayerScore]}";
        }

        return 'Love All';
    }
}
