<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $fillable = [
        'member_id', 'name', 'address', 'country_id', 'city_id', 'zip_code', 'email', 'phone', 'mobile', 'website', 'no_of_employees', 'no_of_branches',
        'establish_year', 'working_hours', 'profile', 'logo', 'more_info', 'status'
    ];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\Service');
    }

    public function certificate()
    {
        return $this->belongsToMany('App\Models\Certificate', 'certificate-company');
    }

    public function companyservice()
    {
        return $this->hasMany('App\Models\CompanyService');
    }

    public function companydirector()
    {
        return $this->hasMany('App\Models\CompanyDirector');
    }
    public function companyrepresentative()
    {
        return $this->hasMany('App\Models\CompanyRepresentative');
    }

    public function traderefrence()
    {
        return $this->hasMany('App\Models\TradeReferences');
    }
    public function companycertificates()
    {
        return $this->hasMany('App\Models\CompanyCertificates');
    }

    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function branches()
    {
        return $this->hasMany('App\Models\CompanyBranch');
    }

    public function company()
    {
        return $this->hasMany('App\Models\CompanyDocument');
    }

    public function rating()
    {
        return $this->hasMany('App\Models\Rating');
    }

}
