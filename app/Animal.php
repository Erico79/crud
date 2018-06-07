<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $guarded = ['id'];

    public function animalKingdom() {
        return $this->belongsTo(AnimalKingdom::class);
    }
}
