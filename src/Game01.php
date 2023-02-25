<?php

namespace Src;

class Game01
{
    protected int $firstPlayerScore = 0;
    protected int $secondPlayerScore = 0;
    public function score()
    {
        if ($this->secondPlayerScore===1) {
            return 'Love Fifteen';
        }
        if ($this->firstPlayerScore === 1) {
            return 'Fifteen Love';
        }
        if ($this->firstPlayerScore === 2) {
            return 'Thirty Love';
        }
        if ($this->firstPlayerScore === 3) {
            return 'Forty Love';
        }
        return 'Love All';
    }
    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }
}
