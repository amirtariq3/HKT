<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDocument extends Model
{
    protected $fillable = [
        'company_id', 'image', 'document', 'detail'
    ];


    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
