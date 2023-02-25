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
        if ($this->firstPlayerScore-$this->secondPlayerScore>=2&&$this->firstPlayerScore>3) {
            return 'First Player Win';
        }
        if ($this->secondPlayerScore-$this->firstPlayerScore===1&&$this->firstPlayerScore>=3) {
            return 'Second Player Adv';
        }
        if ($this->firstPlayerScore-$this->secondPlayerScore===1&&$this->secondPlayerScore>=3) {
            return 'First Player Adv';
        }
        if ($this->firstPlayerScore===$this->secondPlayerScore&&$this->firstPlayerScore>=3) {
            return 'Deuce';
        }
        if ($this->firstPlayerScore===$this->secondPlayerScore&&$this->firstPlayerScore>=1) {
            return "{$lookup[$this->firstPlayerScore]} All";
        }
        if ($this->secondPlayerScore>=1||$this->firstPlayerScore >= 1) {
            return "{$lookup[$this->firstPlayerScore]} {$lookup[$this->secondPlayerScore]}";
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
