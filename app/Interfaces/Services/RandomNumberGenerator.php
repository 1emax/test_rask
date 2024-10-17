<?php

namespace App\Interfaces\Services;

interface RandomNumberGenerator {
    public function generate(): int;
}