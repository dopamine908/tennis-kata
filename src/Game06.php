<?php

namespace Src;

class Game06
{

    private $firstPlayerScore = 0;
    private $scoreLookUp = ["Love", "Fifteen", "Thirty"];

    public function score()
    {
        if ($this->firstPlayerScore === 1 || $this->firstPlayerScore === 2) {
            return "{$this->scoreLookUp[$this->firstPlayerScore]} Love";
        }

        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}
