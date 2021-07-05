<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable = [
        'name', 'country_id', 'status'
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function company()
    {
        return $this->hasMany('App\Models\Company');
    }
    public function tradereferences()
    {
        return $this->hasMany('App\Models\TradeReferences');
    }

    public function branch()
    {
        return $this->hasMany('App\Models\CompanyBranch');
    }
}
