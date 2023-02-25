<?php

namespace Src;

class Game01
{
    protected int $firstPlayerScore = 0;
    protected int $secondPlayerScore = 0;
    public function score()
    {
        $lookup=[
0=>'Love',
1=>'Fifteen',
2=>'Thirty',
3=>'Forty'
];
        if ($this->secondPlayerScore>=1) {
            return "Love {$lookup[$this->secondPlayerScore]}";
        }
        if ($this->firstPlayerScore >= 1) {
            return "{$lookup[$this->firstPlayerScore]} Love";
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
