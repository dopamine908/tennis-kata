<?php

namespace Src;

class Game16
{

    private $firstPlayerScore = 0;

    private $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',
    ];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            if ($this->firstPlayerScore === 1) {
                return 'Fifteen All';
            }

            return 'Love All';
        }

        return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";
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
