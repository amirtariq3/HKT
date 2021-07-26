<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyDirector;
use Auth;

class DirectorController extends Controller
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
        $ceo=CompanyDirector::all()->where('company_id', $id);
        //echo $ceo;die;
        return view('frontend.dashboard.ceo.ceo', ['ceo'=>$ceo]);
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
        return view('frontend.dashboard.ceo.ceo_add');
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
        //echo $row->id;die;
        $data=new CompanyDirector;
        $data->company_id=$row->id;
        $data->name=$r->name;
        $data->email=$r->email;
        $data->phone=$r->phone;
        $data->designation=$r->designation;
        $data->image=($r->image)? $this->upload($r->image):null;
        $data->detail=$r->detail??null;
        $data->save();
        return redirect()->route('frontend.dashboard.ceo.ceo');
        
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
        $data=CompanyDirector::find($id);
        return view('frontend.dashboard.ceo.ceo_update', ['data'=>$data]);
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
        
        $data=CompanyDirector::find($id);
        $data->company_id=$data->company_id;
        $data->name=$r->name??$data->name;
        $data->email=$r->email??$data->email;
        $data->phone=$r->phone??$data->phone;
        $data->designation=$r->designation??$data->designation;
        $data->image=($r->image)? $this->upload($r->image):$data->image;
        $data->detail=$r->detail??$data->detail;
        $data->save();
        return redirect()->route('frontend.dashboard.ceo.ceo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=CompanyDirector::find($id);
        $data->delete();
        return redirect()->back();
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
