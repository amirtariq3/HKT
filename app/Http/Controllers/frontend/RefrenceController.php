<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;
use App\Models\TradeReferences;
use Auth;

class RefrenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::guard('member')->user();
        $data=Company::all()->where('member_id', $user->id)->first();
        $id=$data->id;
        //echo $id;die;
        $ref=TradeReferences::all()->where('company_id', $id);
        //echo $ceo;die;
        return view('frontend.dashboard.refrence', ['ref'=>$ref]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=Country::all();
        $city=City::all();
        return view('frontend.dashboard.add_refrence', ['country'=>$country, 'city'=>$city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $user=Auth::guard('member')->user();
        $row=Company::all()->where('member_id', $user->id)->first();
        $data=new TradeReferences;
        $data->company_id=$row->id;
        $data->name=$r->name;
        $data->country_id=$r->country_id;
        $data->city_id=$r->city_id;
        $data->contact_person=$r->contact_person;
        $data->email=$r->email;
        $data->phone=$r->phone;
        $data->detail=$r->detail;
        $data->save();
        return redirect()->route('frontend.dashboard.refrence');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=TradeReferences::find($id);
        $data->delete();
        return redirect()->back();
    }
}
