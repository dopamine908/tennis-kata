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
        $lookup=['Love','Fifteen','Thirty','Forty'];

        if ($this->firstPlayerScore-$this->secondPlayerScore>=2&&$this->firstPlayerScore>=4) {
            return 'First Player Win';
        }

        if ($this->secondPlayerScore-$this->firstPlayerScore>=2&&$this->secondPlayerScore>=4) {
            return 'Second Player Win';
        }

        if ($this->firstPlayerScore-$this->secondPlayerScore===1&&$this->secondPlayerScore>=3) {
            return 'First Player Adv';
        }

        if ($this->secondPlayerScore-$this->firstPlayerScore===1&&$this->firstPlayerScore>=3) {
            return 'Second Player Adv';
        }

        if ($this->firstPlayerScore===$this->secondPlayerScore) {
            if ($this->firstPlayerScore>=3) {
                return 'Deuce';
            }
            return "{$lookup[$this->firstPlayerScore]} All";
        }

        if ($this->firstPlayerScore>0||$this->secondPlayerScore>0) {
            return "{$lookup[$this->firstPlayerScore]} {$lookup[$this->secondPlayerScore]}";
        }

        return 'Love All';
    }
}
