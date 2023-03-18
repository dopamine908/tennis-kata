<?php

namespace Src;

class Game05
{
    public $firstPlayerScore=0;
    public function addFirstPlayerScore()
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

        return 'Love All';
    }
}
