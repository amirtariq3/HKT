<?php
use App\Models\Country;
use App\Models\City;
use App\Models\Service;
use App\Models\Company;
use App\Models\NewsCategory;

function country(){

    $country=Country::all();
    return $country;
}

function city(){

    $city=City::all();
    return $city;
}

function service(){

    $service=Service::all();
    return $service;
}

function company(){

    $company=Company::all();
    return $company;
}

function newscategory(){

    $newscategory=NewsCategory::all();
    return $newscategory;
}





?>