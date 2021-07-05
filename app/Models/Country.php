<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'name','continent_id', 'code', 'status', 'image'
    ];

    public function continent()
    {
        return $this->belongsTo('App\Models\Continent');
    }

    public function city()
    {
        return $this->hasMany('App\Models\City');
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
