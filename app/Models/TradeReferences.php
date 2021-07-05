<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeReferences extends Model
{
    //

    protected $fillable = [
        'company_id', 'name', 'country_id', 'city_id', 'contact_person', 'email', 'phone', 'detail'
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
