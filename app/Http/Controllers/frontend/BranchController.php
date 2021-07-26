<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;
use App\Models\CompanyBranch;
use Auth;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::guard('member')->user();
        if ($data=Company::all()->where('member_id', $user->id)->first()) {
            $id=$data->id;
        //echo $id;die;
        $bran=CompanyBranch::all()->where('company_id', $id);
        //echo $bran;die;
        return view('frontend.dashboard.branch.branch', ['bran'=>$bran]);
        } else {
            return redirect()->route('frontend.dashboard.prfile')->with('alert', 'Add Company First');
        }
        
        
        
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
        return view('frontend.dashboard.branch.add_branch', ['country'=>$country, 'city'=>$city]);
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
        $data=new CompanyBranch;
        $data->company_id=$row->id;
        $data->branch=$r->name;
        $data->address=$r->address;
        $data->country_id=$r->country_id;
        $data->city_id=$r->city_id;
        $data->phone=$r->phone;
        $data->email=$r->email;
        $data->save();
        return redirect()->route('frontend.dashboard.branch');
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
        $data=CompanyBranch::find($id);
        $country=Country::all();
        $city=City::all();
        return view('frontend.dashboard.branch.update', ['country'=>$country, 'city'=>$city, 'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $data=CompanyBranch::find($id);
        $data->company_id=$data->company_id;
        $data->branch=$r->name??$data->branch;
        $data->address=$r->address??$data->address;
        $data->country_id=$r->country_id??$data->country_id;
        $data->city_id=$r->city_id??$data->city_id;
        $data->phone=$r->phone??$data->phone;
        $data->email=$r->email??$data->email;
        $data->save();
        return redirect()->route('frontend.dashboard.branch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=CompanyBranch::find($id);
        $data->delete();
        return redirect()->back();
    }
}
