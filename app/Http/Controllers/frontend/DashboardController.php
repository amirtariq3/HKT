<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Member;
use App\Models\Country;
use App\Models\City;
use Auth;
use Hash;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (Auth::guard('member')->check()) {
            return view('frontend.dashboard.index');
        }else
        {
            return redirect()->route('frontend.login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.dashboard.member_profile');
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
        //echo $row;die;
        $row->member_id=$r->member_id??$row->member_id;
        $row->name=$r->name??$row->name;
        $row->address=$r->address??$row->address;
        $row->country_id=$r->country_id??$row->country_id;
        $row->city_id=$r->city_id??$row->city_id;
        $row->zip_code=$r->zip_code??$row->city_id;
        $row->email=$r->email??$row->email;
        $row->phone=$r->phone??$row->phone;
        $row->mobile=$r->mobile??$row->mobile;
        $row->website=$r->website??$row->website;
        $row->no_of_employees=$r->no_of_employees??$row->no_of_employees;
        $row->no_of_branches=$r->no_of_branches??$row->no_of_branches;
        $row->establish_year=$r->establish_year??$row->establish_year;
        $row->working_hours=$r->working_hours??$row->working_hours;
        $row->profile=$r->profile??$row->profile;
        $row->logo=($r->logo)? $this->upload($r->logo):$row->logo;
        $row->more_info=$r->more_info??$row->more_info;
        $row->status=$r->status??$row->status;
        $row->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user=Auth::guard('member')->user();
        $data=Company::all()->where('member_id', $user->id);
        $country=Country::all();
        $city=City::all();
        //echo $data;die;
        return view('frontend.dashboard.basic_info', ['data'=>$data, 'country'=>$country, 'city'=>$city]);
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
    public function update(Request $r)
    {
        $user=Auth::guard('member')->user();
        $id=$user->id;
        $data=Member::find($id);
        //echo $data;
        $data->name=$r->name??$data->name;
        $data->gender=$r->gender??$data->gender;
        $data->company=$r->company??$data->company;
        $data->designation=$r->designation??$data->designation;
        $data->phone=$r->phone;
        $data->mobile=$r->mobile??$data->designation;
        $data->email=$r->email??$data->email;
        $data->image=($r->image)? $this->upload($r->image):$data->image;
        $data->password=Hash::make($r->password);
        $data->skype=$r->skype??$data->skype;
        $data->whatsupp	=$r->whatsupp??$data->whatsupp;
        $data->viber=$r->viber??$data->viber;
        $data->gtalk=$r->gtalk??$data->gtalk;
        $data->line=$r->line??$data->line;
        $data->other=$r->other??$data->other;
        $data->status=$r->status??$data->status;
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upload($image, $path="public/images")
    {
        if($image){
            $file = $image;
            $name =  uniqid().".".$file->getClientOriginalExtension();
            $file->move($path, $name);
            return $name;
        }else{
            return null;
        }
    }
}
