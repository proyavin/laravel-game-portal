<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function publisher() {
        return $this->belongsTo(User::class, 'publisher_id');
    }
}
