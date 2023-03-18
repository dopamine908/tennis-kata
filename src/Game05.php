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

        if ($this->firstPlayerScore===$this->secondPlayerScore&&$this->firstPlayerScore===1) {
            return 'Fifteen All';
        }

        if ($this->firstPlayerScore===$this->secondPlayerScore&&$this->firstPlayerScore===2) {
            return 'Thirty All';
        }

        if ($this->firstPlayerScore===$this->secondPlayerScore&&$this->firstPlayerScore===3) {
            return 'Deuce';
        }

        if ($this->firstPlayerScore===$this->secondPlayerScore&&$this->firstPlayerScore===4) {
            return 'Deuce';
        }

        if ($this->firstPlayerScore>0||$this->secondPlayerScore>0) {
            return "{$lookup[$this->firstPlayerScore]} {$lookup[$this->secondPlayerScore]}";
        }

        return 'Love All';
    }
}
