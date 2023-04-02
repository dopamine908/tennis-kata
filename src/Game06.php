<?php

namespace Src;

class Game06
{

    private $firstPlayerScore = 0;
    private $scoreLookUp = ["Love", "Fifteen", "Thirty", "Forty"];
    private $secondPlayerScore = 0;

    public function score()
    {
        if ($this->isScoreSame()) {
            if ($this->isDeuce()) {
                return 'Deuce';
            }
            return $this->sameScore();
        }

        if ($this->someoneReadyToWin()) {
            if ($this->isAdv()) {
                return $this->advScore();
            }
        }

        return $this->normalScore();
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
    private function someoneReadyToWin(): bool
    {
        return $this->firstPlayerScore >= 3 || $this->secondPlayerScore >= 3;
    }

    /**
     * @return string
     */
    private function advScore(): string
    {
        return $this->firstPlayerScore > $this->secondPlayerScore ? 'First Player Adv' : 'Second Player Adv';
    }

    /**
     * @return bool
     */
    private function isAdv(): bool
    {
        return abs($this->secondPlayerScore - $this->firstPlayerScore) === 1;
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
    private function sameScore(): string
    {
        return "{$this->scoreLookUp[$this->firstPlayerScore]} All";
    }

    /**
     * @return string
     */
    private function normalScore(): string
    {
        return "{$this->scoreLookUp[$this->firstPlayerScore]} {$this->scoreLookUp[$this->secondPlayerScore]}";
    }
}
