<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyDirector;
use DataTables;
use Exception;

class CompanyDirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //$data=CompanyDirector::where('company_id', $id)->first();
        //dd($data);
        //echo $data;die;
        $id=$id;
        return view('admin.company.directors.list2', ['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company=Company::find($id);
        return view('admin.company.directors.add', ['company'=>$company]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r,$id)
    {
        $data=new CompanyDirector;
        $data->company_id=$r->company_id;
        $data->name=$r->name;
        $data->email=$r->email;
        $data->phone=$r->phone;
        $data->designation=$r->designation;
        $data->image=($r->image)? $this->upload($r->image):null;
        $data->detail=$r->detail;
        $data->save();
        return redirect()->route('admin.company.director', [$id])->with('success', 'Company_Director Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.company.directors.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=CompanyDirector::find($id);
        $company=Company::all();
        return view('admin.company.directors.update', ['company'=>$company, 'row'=>$row]);
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
        $row=CompanyDirector::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->name=$r->name??$row->name;
        $row->email=$r->email??$row->email;
        $row->phone=$r->phone??$row->phone;
        $row->designation=$r->designation??$row->designation;
        $row->image=($r->image)? $this->upload($r->image):$row->image;
        $row->detail=$r->detail??$row->detail;
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
        $data =CompanyDirector::where('company_id', $id)->with('company')->get();
        return Datatables::of($data)->make(true);
    }

    public function datatable1()
    {
        $data =CompanyDirector::with('company')->get();
        //dd($data);
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
