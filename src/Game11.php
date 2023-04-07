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
        if ($this->firstPlayerScore === $this->secondPayerScore) {
            if ($this->firstPlayerScore === 1) {
                return 'Fifteen All';
            }
            return 'Love All';
        }

        return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPayerScore]}";
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
