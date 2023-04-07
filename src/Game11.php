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
            if ($this->firstPlayerScore === 3) {
                return 'Deuce';
            }

            return "{$this->scoreLookup[$this->firstPlayerScore]} All";
        }

        if ($this->firstPlayerScore > 3) {
            if ($this->firstPlayerScore - $this->secondPayerScore === 1) {
                return 'First Player Adv';
            }
        }

        if ($this->secondPayerScore > 3) {
            if ($this->secondPayerScore - $this->firstPlayerScore === 1) {
                return 'Second Player Adv';
            }
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
