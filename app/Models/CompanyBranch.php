<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyBranch extends Model
{
    protected $fillable = [
        'company_id', 'country_id', 'city_id', 'branch', 'address', 'phone', 'email'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    
}
