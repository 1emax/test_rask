<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function showRegistrationForm() {
        return view('register');
    }

    public function register(Request $request) {
        // Валидация данных
        $request->validate([
            'username' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:20',
        ]);

        $user = User::create([
            'username' => $request->username,
            'phonenumber' => $request->phonenumber,
        ]);

        UserLink::create([
            'user_id' => $user->id,
            'unique_link' => Str::random(32),
            'link_expiry' => now()->addDays(7),
        ]);

        return redirect()->route('user.pageA', $user->userLink->unique_link);
    }

}
