<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Member;
use App\Models\Review;
use DataTables;
use Exception;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id=$id;
        return view('admin.company.review.list2', ['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company=Company::find($id);
        $member=Member::all();
        return view('admin.company.review.add', ['company'=>$company, 'member'=>$member]);
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
        $data=new Review;
        $data->company_id=$r->company_id;
        $data->member_id=$r->member_id;
        $data->review=$r->review??null;
        $data->rating=$r->rating;
        $data->save();
        return redirect()->route('admin.company.reviews', [$id])->with('success', 'Company_Director Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.company.review.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Review::find($id);
        $company=Company::all();
        $member=Member::all();
        return view('admin.company.review.update', ['company'=>$company, 'member'=>$member, 'row'=>$row]);
        
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
        $row=Review::find($id);
        $row->company_id=$r->company_id??$row->company_id;
        $row->member_id=$r->member_id??$row->member_id;
        $row->review=$r->review??$row->review;
        $row->rating=$r->rating??$row->rating;
        $row->save();
        return redirect()->route('admin.company.reviews', [$id])->with('success', 'Company_Director Update!');
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
        $data =Review::where('company_id', $id)->with('company', 'member')->get();
        return Datatables::of($data)->make(true);
    }

    public function list()
      {
        $data =Review::with('company', 'member')->get();
        return Datatables::of($data)->make(true);
    }
}
