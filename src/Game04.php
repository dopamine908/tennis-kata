<?php

namespace Src;

class Game04
{
    public $firstPlayerScore=0;
    public function addFisrstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
    public function score()
    {
        $lookup=[ 'Love','Fifteen','Thirty','Forty'];

        if ($this->firstPlayerScore>0) {
            return "{$lookup[$this->firstPlayerScore]} Love";
        }

        return 'Love All';
    }
}
