<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Certificate;
use App\Models\CompanyCertificates;
use DataTables;
use Exception;

class CompanyCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id=$id;
        return view('admin.company.certificate.list2', ['id'=>$id]);
        //return view('admin.company.certificate.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company=Company::all();
        $data=Certificate::all();
        return view('admin.company.certificate.add', ['company'=>$company, 'data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new CompanyCertificates;
        $data->company_id=$r->company_id;
        $data->certificate_id=$r->certificate_id;
         $data->save();
        return redirect()->route('admin.company_certificate.index')->with('success', 'company_certificate Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.company.certificate.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=CompanyCertificates::find($id);
        $company=Company::all();
        $data=Certificate::all();
        return view('admin.company.certificate.update', ['company'=>$company, 'data'=>$data, 'row'=>$row]);

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
        $row=CompanyCertificates::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->certificate_id=$r->certificate_id??$row->certificate_id;
         $row->save();
        return redirect()->route('admin.company_certificate.index')->with('success', 'company_certificate Updated!');

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

    public function add($id)
    {
        $c = Company::where('id', $id)->with('certificate')->first();
        //dd($c);
        $s = [];
        foreach($c->certificate as $a){
            array_push($s, $a->id);
        }
        return view('admin.company.certificate.add2', ['certificate' => Certificate::all(), 'c->certificate' => $s]);
    }

    public function certificateSync(Request $r, $id)
    {
        $c = Company::where('id', $id)->with('certificate')->first();
        $c->certificate()->sync($r->certificate);
        return redirect()->back();
        
    }

    public function serviceSyncView(Request $r, $id)
    {
        $c = Company::where('id', $id)->with('certificate')->first();
        $s = [];
        foreach($c->certificate as $a){
            array_push($s, $a->id);
        }
        return view('admin.company.certificate.list2', ['certificate' => Certificate::all(), 'c_certificate' => $s, 'c'=>$c]);
    }

    public function datatable($id)
      {
        $data =CompanyCertificates::where('company_id', $id)->with('company', 'certificate')->get();
        return Datatables::of($data)->make(true);
    }

}
