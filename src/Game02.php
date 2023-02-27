<?php

namespace Src;

class Game02
{
    public int$firstPlayerScore=0;
    public int$secondPlayerScore=0;
    public function score()
    {
        $lookup=
[
0=>'Love',
1=>'Fifteen',
2=>'Thirty',
3=>'Forty',
];
        if ($this->firstPlayerScore>=1||$this->secondPlayerScore>=1) {
            if ($this->firstPlayerScore===$this->secondPlayerScore) {
                if ($this->firstPlayerScore===3) {
                    return 'Duece';
                }
                return "{$lookup[$this->firstPlayerScore]} All";
            }
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
