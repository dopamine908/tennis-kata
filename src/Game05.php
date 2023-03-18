<?php

namespace Src;

class Game05
{
    public $firstPlayerScore=0;
    public $secondPlayerScore=0;
    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
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

        if ($this->secondPlayerScore===1) {
            return 'Love Fifteen';
        }

        return 'Love All';
    }
}
