<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'detail', 'status'
    ];

    public function companyservice()
    {
        return $this->hasMany('App\Models\CompanyService');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Models\Company');
    }
}
