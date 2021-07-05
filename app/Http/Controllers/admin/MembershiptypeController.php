<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membershiptype;
use DataTables;
use Exception;


class MembershiptypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.membership_type.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.membership_type.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new Membershiptype;
        $data->name=$r->name;
        $data->membership_fee=$r->membership_fee;
        $data->currency=$r->currency;
        $data->duration_of_membership=$r->duration_of_membership;
        $data->benefits=$r->benefits??null;
        $data->status=$r->statu??1;
        echo $data->save();
       return redirect()->route('admin.membership_type.index')->with('success', 'Membershiptype Created!');
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
        $data=Membershiptype::find($id);
        return view('admin.membership_type.update', ['data'=>$data]);
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
        $data=Membershiptype::find($id);
        $data->name=$r->name??$data->name;
        $data->membership_fee=$r->membership_fee??$data->membership_fee;
        $data->currency=$r->currency??$data->currency;
        $data->duration_of_membership=$r->duration_of_membership??$data->duration_of_membership;
        $data->benefits=$r->benefits?$data->benefits:null;
        $data->status=$r->status;
        $data->save();
        return redirect()->route('admin.membership_type.index')->with('success', 'Membershiptype Updated!');
        
        
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
        $data =Membershiptype::get();
        return Datatables::of($data)->make(true);
    }
}
