<?php

namespace Src;

class Game02
{
    public int$firstPlayerScore=0;
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
    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}
