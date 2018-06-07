<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FootballClub extends Model
{
    protected $guarded = ['id'];

    public function players() {
        return $this->hasMany(Player::class, 'club_id', 'id');
    }
}
