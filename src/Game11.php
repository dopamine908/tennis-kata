<?php

namespace Src;

class Game11
{

    private $firstPlayerScore = 0;
    private $secondPayerScore = 0;
    private $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',
    ];


    public function score()
    {
        if ($this->firstPlayerScore >= 1) {
            return "{$this->scoreLookup[$this->firstPlayerScore]} Love";
        }

        if ($this->secondPayerScore >= 1) {
            return "Love {$this->scoreLookup[$this->secondPayerScore]}";
        }

        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function addSecondPlayerScore()
    {
        $this->secondPayerScore++;
    }
}
