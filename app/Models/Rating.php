<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'company_id', 'name', 'rating', 'review', 'status'
        
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    
}
