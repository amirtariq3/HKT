<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'name', 'image', 'detail', 'status'
    ];

    public function companycertificates()
    {
        return $this->hasMany('App\Models\CompanyCertificates');
    }

    public function companies()
    {
        return $this->belongsToMany('App\Models\Company');
    }
}
