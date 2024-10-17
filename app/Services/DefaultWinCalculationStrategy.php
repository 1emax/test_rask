<?php

namespace App\Services;

use App\Interfaces\Services\WinCalculationStrategy;

class DefaultWinCalculationStrategy implements WinCalculationStrategy
{
    public function calculateWin(int $random_number, int $default_win = 0): int
    {
        if ($random_number % 2 == 0) {
            $multiplier = match (true) {
                $random_number > 900 => 0.7,
                $random_number > 600 => 0.5,
                $random_number > 300 => 0.3,
                default => 0.1,
            };

            return $random_number * $multiplier;

        }

        return $default_win;
    }
}