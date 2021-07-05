<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'membership_type_id', 'gender', 'company', 'designation', 'phone', 'mobile', 'email', 'image', 'password', 'skype',
   'whatsupp', 'viber', 'gtalk', 'line', 'other', 'status'     
    ];

    public function membership()
    {
        return $this->belongsTo('App\Models\Membershiptype');
    }

    public function news()
    {
        return $this->hasMany('App\Models\News');
    }

    public function company()
    {
        return $this->hasMany('App\Models\Company');
    }

    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }
}
