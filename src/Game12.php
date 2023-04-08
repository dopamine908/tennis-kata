<?php

namespace Src;

class Game12
{

    private $firstPlayerScore = 0;
    protected $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty'
    ];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore >= 1 || $this->secondPlayerScore >= 1) {
            return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";
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
