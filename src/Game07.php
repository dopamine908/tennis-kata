<?php

namespace Src;

class Game07
{

    private $firstPlayerScore;
    private $scoreLookUp = ["Love", "Fifteen", "Thirty", "Forty"];

    public function score()
    {
        if ($this->firstPlayerScore >= 1) {
            return "{$this->scoreLookUp[$this->firstPlayerScore]} Love";
        }

        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}
