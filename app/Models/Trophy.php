<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trophy extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'trophy_user', 'trophy_id', 'user_id');
    }
}
