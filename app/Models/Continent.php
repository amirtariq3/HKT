<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $fillable = [
        'name', 'status'
    ];
    public function country()
    {
        return $this->hasMany(Country::class);
    }
}
