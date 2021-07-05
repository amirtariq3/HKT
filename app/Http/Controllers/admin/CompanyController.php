<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Member;
use App\Models\Country;
use App\Models\City;
use DataTables;
use Exception;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member=Member::all();
        $country=Country::all();
        $city=City::all();
        return view('admin.company.add', ['member'=>$member, 'country'=>$country, 'city'=>$city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //$data=$r->all();
        //dd($data);
        $data=new Company;
        $data->member_id=$r->member_id;
        $data->name=$r->name;
        $data->address=$r->address;
        $data->country_id=$r->country_id;
        $data->city_id=$r->city_id;
        $data->zip_code=$r->zip_code??null;
        $data->email=$r->email;
        $data->phone=$r->phone;
        $data->mobile=$r->mobile??null;
        $data->website=$r->website??null;
        $data->no_of_employees=$r->no_of_employees;
        $data->no_of_branches=$r->no_of_branches??null;
        $data->establish_year=$r->establish_year??null;
        $data->working_hours=$r->working_hours;
        $data->profile=$r->profile;
        $data->logo=($r->logo)? $this->upload($r->logo):null;
        $data->more_info=$r->more_info??null;
        $data->status=$r->status??1;
        $data->save();
        return redirect()->route('admin.company.index')->with('success', 'Company Created!');
       // $com=Company::latest()->first();
        //$company=$com->id;
        //echo $company;
        //return redirect()->route('admin.company.id');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Company::find($id);
        $member=Member::all();
        $country=Country::all();
        $city=City::all();
        return view('admin.company.update', ['member'=>$member, 'country'=>$country, 'city'=>$city, 'row'=>$row]);

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
        $row=Company::find($id);
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
        return redirect()->route('admin.company.index')->with('success', 'Company Updated!');
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

    public function datatable()
      {
        $data =Company::with('country', 'city')->get();
        return Datatables::of($data)->make(true);
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
