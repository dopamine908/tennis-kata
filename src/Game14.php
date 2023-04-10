<?php

namespace Src;

class Game14
{

    private $firstPlayerScore = 0;
    private $secondPlayerScore = 0;
    private $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',
    ];


    public function score()
    {
        if ($this->firstPlayerScore === $this->secondPlayerScore) {
            if ($this->firstPlayerScore === 3) {
                return 'Deuce';
            }

            return "{$this->scoreLookup[$this->firstPlayerScore ]} All";
        }

        return "{$this->scoreLookup[$this->firstPlayerScore ]} {$this->scoreLookup[$this->secondPlayerScore ]}";

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
