<?php

namespace App\Http\Controllers;

use App\Interfaces\Services\RandomNumberGenerator;
use App\Interfaces\Services\WinCalculationStrategy;
use App\Models\LuckyResult;
use App\Models\UserLink;

class LuckyController extends Controller
{
    public function __construct(
        protected RandomNumberGenerator $randomNumberGenerator,
        protected WinCalculationStrategy $winCalculationStrategy,
    ) {
    }

    public function imFeelingLucky($unique_link) {
        // Поиск пользователя по уникальной ссылке
        $userLink = UserLink::where('unique_link', $unique_link)->firstOrFail();
        $user = $userLink->user;

        // Генерация случайного числа
        $random_number = $this->randomNumberGenerator->generate();

        // Расчет выигрыша
        $win_amount = $this->winCalculationStrategy->calculateWin($random_number);

        LuckyResult::create([
            'user_id' => $user->id,
            'result' => $random_number,
            'win_amount' => $win_amount,
        ]);

        return view('lucky_result', compact('random_number', 'win_amount', 'userLink'));
    }

    public function history($unique_link) {
        // Поиск пользователя по уникальной ссылке
        $userLink = UserLink::where('unique_link', $unique_link)->firstOrFail();
        $history = LuckyResult::where('user_id', $userLink->user->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('history', compact('history', 'userLink'));
    }
}
