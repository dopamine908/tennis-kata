<?php

namespace Src;

class Game16
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

        if ($this->isSomeoneReadyToWin()) {
            if ($this->isSomeoneAdv()) {
                return $this->advScore();
            }
            if ($this->isSomeoneWin()) {
                return $this->winScore();
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
    private function isScoreSame(): bool
    {
        return $this->firstPlayerScore === $this->secondPlayerScore;
    }

    /**
     * @return bool
     */
    private function isDeuce(): bool
    {
        return $this->firstPlayerScore === 3;
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

    /**
     * @return bool
     */
    private function isSomeoneReadyToWin(): bool
    {
        return $this->firstPlayerScore > 3 || $this->secondPlayerScore > 3;
    }

    /**
     * @return bool
     */
    private function isSomeoneAdv(): bool
    {
        return abs($this->firstPlayerScore - $this->secondPlayerScore) === 1;
    }

    /**
     * @return string
     */
    private function advScore(): string
    {
        if ($this->firstPlayerScore > $this->secondPlayerScore) {
            return 'First Player Adv';
        }
        return 'Second Player Adv';
    }

    /**
     * @return bool
     */
    private function isSomeoneWin(): bool
    {
        return abs($this->firstPlayerScore - $this->secondPlayerScore) === 2;
    }

    /**
     * @return string
     */
    private function winScore(): string
    {
        if ($this->firstPlayerScore > $this->secondPlayerScore) {
            return 'First Player Win';
        }
        return 'Second Player Win';
    }

    /**
     * @return string
     */
    private function normalScore(): string
    {
        return "{$this->scoreLookup[$this->firstPlayerScore]} {$this->scoreLookup[$this->secondPlayerScore]}";
    }
}
