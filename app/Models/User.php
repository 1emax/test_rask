<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function userLink()
    {
        return $this->hasOne(UserLink::class);
    }

    public function luckyResults()
    {
        return $this->hasMany(LuckyResult::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'phonenumber',
    ];
}
