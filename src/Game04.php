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

        if ($this->firstPlayerScore>0) {
            return "{$lookup[$this->firstPlayerScore]} Love";
        }

        if ($this->secondPlayerScore===1) {
            return "Love Fifteen";
        }

        return 'Love All';
    }
}
