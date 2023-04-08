<?php

namespace Src;

class Game12
{

    private $firstPlayerScore = 0;
    protected $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',

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
