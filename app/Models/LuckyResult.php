<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuckyResult extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'result', 'win_amount'];

    // Связь с моделью User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
