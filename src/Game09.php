<?php

namespace Src;

class Game09
{

    private $firstPlayerScore = 0;
    private $scoreLookup = ["Love", "Fifteen", "Thirty"];

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
