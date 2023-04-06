<?php

namespace Src;

class Game10
{

    private $firstPlayerScore = 0;
    private $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
    ];

    public function score()
    {
        if ($this->firstPlayerScore === 1 || $this->firstPlayerScore === 2) {
            return "{$this->scoreLookup[$this->firstPlayerScore]} Love";
        }

        return 'Love All';
    }

    public function addFirstPayerScore()
    {
        $this->firstPlayerScore++;
    }
}
