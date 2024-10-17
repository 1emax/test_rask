<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Services\RandomNumberGenerator;
use App\Interfaces\Services\WinCalculationStrategy;
use App\Services\SimpleRandomNumberGenerator;
use App\Services\DefaultWinCalculationStrategy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RandomNumberGenerator::class, SimpleRandomNumberGenerator::class);
        $this->app->bind(WinCalculationStrategy::class, DefaultWinCalculationStrategy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
