<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyRepresentative;
use App\Models\representative;
use Auth;

class RepresentativeController extends Controller
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
        $rep=CompanyRepresentative::all()->where('company_id', $id);
        //echo $ceo;die;
        return view('frontend.dashboard.representative.representative', ['rep'=>$rep]);
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
        $data=representative::all();
        return view('frontend.dashboard.representative.add_representative', ['data'=>$data]);
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
        $data=new CompanyRepresentative;
        $data->company_id=$row->id;
        $data->name=$r->name;
        $data->email=$r->email;
        $data->phone=$r->phone;
        $data->whatsupp=$r->whatsupp;
        $data->representative_id=$r->representative_id;
        $data->save();
        return redirect()->route('frontend.dashboard.representative');
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
        $data=CompanyRepresentative::find($id);
        $rep=representative::all();
        return view('frontend.dashboard.representative.update', ['data'=>$data, 'rep'=>$rep]);

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
        $data=CompanyRepresentative::find($id);
        $data->company_id=$data->company_id;
        $data->name=$r->name??$data->name;
        $data->email=$r->email??$data->email;
        $data->phone=$r->phone??$data->phone;
        $data->whatsupp=$r->whatsupp??$data->whatsupp;
        $data->representative_id=$r->representative_id??$data->representative_id;
        $data->save();
        return redirect()->route('frontend.dashboard.representative');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=CompanyRepresentative::find($id);
        $data->delete();
        return redirect()->back();
    }
}
