<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{
    //
    protected $fillable = [
        'company_id', 'service_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
