<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TradeReferences;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;
use DataTables;
use Exception;

class TradeReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id=$id;
        return view('admin.company.trade_references.list2', ['id'=>$id]);
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
        return view('admin.company.trade_references.add', ['company'=>$company, 'country'=>$country, 'city'=>$city]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new TradeReferences;
        $data->company_id=$r->company_id;
        $data->name=$r->name;
        $data->country_id=$r->country_id;
        $data->city_id=$r->city_id;
        $data->contact_person=$r->contact_person;
        $data->email=$r->email;
        $data->phone=$r->phone;
        $data->detail=$r->detail;
        $data->save();
        return redirect()->route('admin.company.trade_refrence', [$id])->with('success', 'trade_refrence Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.company.trade_references.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=TradeReferences::find($id);
        $company=Company::all();
        $country=Country::all();
        $city=City::all();
        return view('admin.company.trade_references.update', ['company'=>$company, 'country'=>$country, 'city'=>$city, 'row'=>$row]);
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
        $row=TradeReferences::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->name=$r->name??$row->name;
        $row->country_id=$r->country_id??$row->country_id;
        $row->city_id=$r->city_id??$row->city_id;
        $row->contact_person=$r->contact_person??$row->contact_person;
        $row->email=$r->email??$row->email;
        $row->phone=$r->phone??$row->phone;
        $row->detail=$r->detail??$row->detail;
        $row->save();
        return redirect()->route('admin.company.index')->with('success', 'trade_refrence Updated!');
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
      $data =TradeReferences::where('company_id', $id)->with('company', 'country', 'city')->get();
      return Datatables::of($data)->make(true);
    }

    public function list()
    {
      $data =TradeReferences::with('company', 'country', 'city')->get();
      return Datatables::of($data)->make(true);
    }
}
