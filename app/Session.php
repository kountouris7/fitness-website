<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function lesson()
    {
        return $this->belongsToMany(Lessons::class);
    }
}
