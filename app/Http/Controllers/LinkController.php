<?php

namespace App\Http\Controllers;

use App\Models\UserLink;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function generateNewLink($unique_link) {
        // Поиск ссылки пользователя
        $userLink = UserLink::where('unique_link', $unique_link)->firstOrFail();

        // Генерация новой уникальной ссылки и обновление даты истечения
        $userLink->update([
            'unique_link' => Str::random(32),
            'link_expiry' => now()->addDays(7),
        ]);

        return redirect()->route('user.pageA', $userLink->unique_link);
    }

    public function deactivateLink($unique_link) {
        $userLink = UserLink::where('unique_link', $unique_link)->firstOrFail();

        $userLink->update([
            'link_expiry' => now(),
        ]);

        return redirect('/');
    }
}
