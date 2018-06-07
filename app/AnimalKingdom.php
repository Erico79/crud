<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimalKingdom extends Model
{
    protected $fillable = ['name']; //specify the table columns that are fillable

    public function animals() {
        return $this->hasMany(Animal::class);
    }
}
