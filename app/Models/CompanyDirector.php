<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDirector extends Model
{
    //
    protected $fillable = [
        'company_id', 'name', 'email', 'phone', 'image', 'detail', 'designation'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
