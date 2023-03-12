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
        if ($this->firstPlayerScore===1) {
            return 'Fifteen Love';
        }

        if ($this->firstPlayerScore===2) {
            return 'Thirty Love';
        }

        if ($this->firstPlayerScore===3) {
            return 'Forty Love';
        }

        return 'Love All';
    }
}
