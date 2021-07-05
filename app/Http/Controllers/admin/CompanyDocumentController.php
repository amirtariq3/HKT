<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyDocument;
use DataTables;
use Exception;

class CompanyDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id=$id;
        return view('admin.company.document.list2',['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company=Company::find($id);
     
        return view('admin.company.document.add', ['company'=>$company]);
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
        $data=new CompanyDocument;
        $data->company_id=$r->company_id;
        $data->image=($r->image)?$this->upload($r->image):null;
        $data->document=($r->document)?$this->upload1($r->document):null;
        $data->detail=$r->detail;
        $data->save();
        return redirect()->route('admin.company.documents', [$id])->with('success', 'Company_documents Created!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.company.document.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=CompanyDocument::find($id);
        $company=Company::all();
     
        return view('admin.company.document.update', ['company'=>$company, 'row'=>$row]);
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
        $row=CompanyDocument::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->image=($r->image)?$this->upload($r->image):$row->image;
        $row->document=($r->document)?$this->upload1($r->document):$row->document;
        $row->detail=$r->detail??$row->detail;
        $row->save();
        return redirect()->route('admin.company.index')->with('success', 'Company_documents Updated!');
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
        $data =CompanyDocument::where('company_id', $id)->with('company')->get();
        return Datatables::of($data)->make(true);
    }

    public function list()
      {
        $data =CompanyDocument::with('company')->get();
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

    public function upload1($pdf, $path="public/images")
    {
        if($pdf){
            $file = $pdf;
            $name =  uniqid().".".$file->getClientOriginalExtension();
            $file->move($path, $name);
            return $name;
        }else{
            return null;
        }
    }
}
