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
        return 'Love All';
    }
}
