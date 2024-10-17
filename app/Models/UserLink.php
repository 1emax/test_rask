<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLink extends Model
{
    protected $fillable = ['user_id', 'unique_link', 'link_expiry'];

    // Связь с таблицей users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
