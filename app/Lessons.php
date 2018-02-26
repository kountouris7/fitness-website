<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    public function session()
    {
        return $this->hasMany(session::class);
    }


}
