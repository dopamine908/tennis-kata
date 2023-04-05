<?php

namespace Src;

class Game09
{

    private $firstPlayerScore = 0;
    private $scoreLookup = ["Love", "Fifteen", "Thirty", "Forty"];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            return "{$this->scoreLookup[$this->firstPlayerScore]} All";
        }

        return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function givenSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }
}
