<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membershiptype extends Model
{
    //
    protected $fillable = [
        'name','membership_fee', 'currency', 'duration_of_membership', 'benefits', 'status'
    ];
    public function member()
    {
        return $this->hasMany('App\Models\Member');
    }
}
