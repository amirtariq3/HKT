<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyCertificates extends Model
{
    
    protected $fillable = [
        'company_id', 'certificate_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function certificate()
    {
        return $this->belongsTo('App\Models\Certificate');
    }
}
