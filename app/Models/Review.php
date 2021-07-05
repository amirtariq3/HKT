<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'company_id', 'member_id', 'review', 'rating'
        
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }
}
