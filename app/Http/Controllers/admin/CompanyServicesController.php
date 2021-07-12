<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Service;
use App\Models\CompanyService;
use DataTables;
use Exception;



class CompanyServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company.services.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $c = Company::where('id', $id)->with('services')->first();
        $s = [];
        foreach($c->services as $a){
            array_push($s, $a->id);
        }
        return view('admin.company.services.add2', ['services' => Service::all(), 'c_services' => $s]);
    }

    public function add($id)
    {
        $c = Company::where('id', $id)->with('services')->first();
        $s = [];
        foreach($c->services as $a){
            array_push($s, $a->id);
        }
        return view('admin.company.services.add2', ['services' => Service::all(), 'c_services' => $s]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new CompanyService;
        $data->company_id=$r->company_id;
        $data->service_id=$r->service_id;
        $data->save();
        return redirect()->route('admin.company_service.index')->with('success', 'Company_Service Created!');
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
        $c = Company::where('id', $id)->with('services')->first();
        $s = [];
        foreach($c->services as $a){
            array_push($s, $a->id);
        }
        return view('admin.company.services.update', ['services' => Service::all(), 'c_services' => $s]);

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
        $row=CompanyService::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->service_id=$r->service_id??$row->service_id;
        $row->save();
        return redirect()->route('admin.company.index')->with('success', 'Company_Service Updated!');

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

    
    public function serviceSyncView(Request $r, $id)
    {
        $c = Company::where('id', $id)->with('services')->first();
        $s = [];
        foreach($c->services as $a){
            array_push($s, $a->id);
        }
        return view('admin.company.services.list', ['services' => Service::all(), 'c_services' => $s, 'c'=>$c]);
    }

    public function serviceSync(Request $r, $id)
    {
        $c = Company::where('id', $id)->with('services')->first();
        $c->services()->sync($r->services);
        return redirect()->back()->with('success', 'Company_Service Updated!');
    }
}
