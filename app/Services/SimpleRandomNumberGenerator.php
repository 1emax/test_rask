<?php

namespace App\Services;

use App\Interfaces\Services\RandomNumberGenerator;

class SimpleRandomNumberGenerator implements RandomNumberGenerator {
    public function generate(): int {
        return rand(1, 1000);
    }
}