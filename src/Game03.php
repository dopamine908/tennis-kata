<?php

namespace Src;

class Game03
{
    private int $firstPlayerScore=0;
    private int $secondPlayerScore=0;
    public function score()
    {
        $lookup=[
0=>'Love',
1=>'Fifteen',
2=>'Thirty',
3=>'Forty',
];
        if ($this->firstPlayerScore>=1) {
            return "{$lookup[$this->firstPlayerScore]} Love";
        }
        if ($this->secondPlayerScore===1) {
            return 'Love Fifteen';
        }
        if ($this->secondPlayerScore===2) {
            return 'Love Thirty';
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
