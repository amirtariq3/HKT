<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class representative extends Model
{
    //

    public function companyrepresentative()
    {
        return $this->hasMany('App\Models\CompanyRepresentative');
    }
}
