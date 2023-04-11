<?php

namespace Src;

class Game15
{
    private $firstPlayerScore = 0;
    private $secondPlayerScore = 0;
    private $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',

    ];

    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            if ($this->firstPlayerScore === 1) {
                return 'Fifteen All';
            }

            return 'Love All';
        }
        if ($this->firstPlayerScore >= 1 || $this->secondPlayerScore >= 1) {
            return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";
        }
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