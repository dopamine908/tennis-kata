<?php

namespace Src;

class Game15
{
    private $firstPlayerScore = 0;
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

        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}
