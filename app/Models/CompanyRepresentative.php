<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyRepresentative extends Model
{
    //

    protected $fillable = [
        'country_id', 'name', 'email', 'phone', 'whatsupp', 'representative_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function representative()
    {
        return $this->belongsTo('App\Models\Representative');
    }
}
