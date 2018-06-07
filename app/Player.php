<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = ['id'];

    public function footballClub() {
        return $this->belongsTo(FootballClub::class);
    }

    public function position() {
        return $this->belongsTo(Position::class);
    }
}
