<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Representative;
use App\Models\CompanyRepresentative;
use DataTables;
use Exception;


class CompanyRepresentativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id=$id;
        return view('admin.company.representative.list2',['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company=Company::find($id);
        $data=Representative::all();
        return view('admin.company.representative.add', ['company'=>$company, 'data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r,$id)
    {
        $data=new CompanyRepresentative;
        $data->company_id=$r->company_id;
        $data->name=$r->name;
        $data->email=$r->email;
        $data->phone=$r->phone;
        $data->whatsupp=$r->whatsupp;
        $data->representative_id=$r->representative_id;
        $data->save();
        return redirect()->route('admin.company.representative',[$id])->with('success', 'Company_Representative Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.company.representative.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=CompanyRepresentative::find($id);
        $company=Company::all();
        $data=Representative::all();
        return view('admin.company.representative.update', ['company'=>$company, 'data'=>$data, 'row'=>$row]);
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
        $row=CompanyRepresentative::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->name=$r->name??$row->name;
        $row->email=$r->email??$row->email;
        $row->phone=$r->phone??$row->phone;
        $row->whatsupp=$r->whatsupp??$row->whatsupp;
        $row->representative_id=$r->representative_id??$row->representative_id;
        $row->save();
        return redirect()->route('admin.company.index')->with('success', 'Company_Director Update!');
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
        $data =CompanyRepresentative::where('company_id', $id)->with('company', 'representative')->get();
        return Datatables::of($data)->make(true);
    }

    public function list()
      {
        $data =CompanyRepresentative::with('company', 'representative')->get();
        return Datatables::of($data)->make(true);
    }
}
