<?php

namespace Src;

class Game07
{

    private $firstPlayerScore;

    public function score()
    {
        if ($this->firstPlayerScore === 1) {
            return 'Fifteen All';
        }

        return 'Love All';
    }

    public function addFirstPlayerScore()
    {
        $this->firstPlayerScore++;
    }
}
