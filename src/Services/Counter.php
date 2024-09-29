<?php

namespace App\Services;

class Counter
{
    private int $counter = 0;

    public function getCounter(): int
    {
        return $this->counter;
    }

    public function increase($count = 1): void
    {
        $this->counter += $count;
    }
}
