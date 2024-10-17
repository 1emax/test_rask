<?php

namespace App\Http\Controllers;

use App\Models\UserLink;

class UserController extends Controller
{
    public function showPageA($unique_link)
    {
        // Поиск ссылки пользователя
        $userLink = UserLink::where('unique_link', $unique_link)
            ->where('link_expiry', '>', now())
            ->firstOrFail();

        $user = $userLink->user;

        return view('pageA', compact('user', 'userLink'));
    }
}
