<?php

namespace Src;

class Game01
{
    protected int $firstPlayerScore = 0;
    public function score()
    {
        if ($this->firstPlayerScore === 1) {
            return 'Fifteen Love';
        }
        return 'Love All';
    }
    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}
