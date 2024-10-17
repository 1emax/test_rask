<?php

namespace App\Interfaces\Services;

interface WinCalculationStrategy
{
    public function calculateWin(int $random_number, int $default_win): int;
}