<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyBranch;
use App\Models\Country;
use App\Models\City;
use DataTables;
use Exception;

class CompanyBranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id=$id;
        return view('admin.company.branches.list2', ['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company=Company::find($id);
        $country=Country::all();
        $city=City::all();
        return view('admin.company.branches.add', ['company'=>$company, 'country'=>$country, 'city'=>$city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new CompanyBranch;
        $data->company_id=$r->company_id;
        $data->branch=$r->name;
        $data->address=$r->address;
        $data->country_id=$r->country_id;
        $data->city_id=$r->city_id;
        $data->phone=$r->phone;
        $data->email=$r->email;
        $data->save();
        return redirect()->route('admin.company.branches', [$id])->with('success', 'Company Branch Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.company.branches.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=CompanyBranch::find($id);
        $company=Company::all();
        $country=Country::all();
        $city=City::all();
        return view('admin.company.branches.update', ['company'=>$company, 'country'=>$country, 'city'=>$city, 'row'=>$row]);

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
        $row=CompanyBranch::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->branch=$r->name??$row->branch;
        $row->address=$r->address??$row->address;
        $row->country_id=$r->country_id??$row->country_id;
        $row->city_id=$r->city_id??$row->city_id;
        $row->phone=$r->phone??$row->phone;
        $row->email=$r->email??$row->email;
        $row->save();
        return redirect()->route('admin.company.index')->with('success', 'Company Branch Updated!');

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

    public function datatable($id)
      {
        $data =CompanyBranch::where('company_id', $id)->with('company', 'country', 'city')->get();
        return Datatables::of($data)->make(true);
    }

    public function list()
      {
        $data =CompanyBranch::with('company', 'country', 'city')->get();
        return Datatables::of($data)->make(true);
    }
}
