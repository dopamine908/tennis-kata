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

        if ($this->firstPlayerScore > 3) {
            if ($this->firstPlayerScore - $this->secondPlayerScore === 1) {
                return 'First Player Adv';
            }
        }

        if ($this->secondPlayerScore > 3) {
            if ($this->secondPlayerScore - $this->firstPlayerScore === 1) {
                return 'Second Player Adv';
            }
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
