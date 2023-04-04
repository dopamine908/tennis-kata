<?php

namespace Src;

class Game08
{

    private $firstPlayerScore = 0;
    private $scoreLookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty',
    ];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->isScoreSame()) {
            if ($this->isDeuce()) {
                return $this->deuceScore();
            }
            return $this->sameScore();
        }

        if ($this->firstPlayerScore >= 1 || $this->secondPlayerScore >= 1) {
            if ($this->firstPlayerScore - $this->secondPlayerScore === 1) {
                if ($this->firstPlayerScore > 3) {
                    return 'First Player Adv';
                }
            }
            return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";
        }
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }

    public function addSecondPlayerScore()
    {
        $this->secondPlayerScore++;
    }

    /**
     * @return bool
     */
    private function isScoreSame(): bool
    {
        return $this->firstPlayerScore === $this->secondPlayerScore;
    }

    /**
     * @return bool
     */
    private function isDeuce(): bool
    {
        return $this->firstPlayerScore >= 3;
    }

    /**
     * @return string
     */
    private function deuceScore(): string
    {
        return 'Deuce';
    }

    /**
     * @return string
     */
    private function sameScore(): string
    {
        return "{$this->scoreLookup[$this->firstPlayerScore]} All";
    }
}
