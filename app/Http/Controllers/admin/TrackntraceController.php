<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trackntrace;
use DataTables;
use Exception;

class TrackntraceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.trackntrace.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trackntrace.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new Trackntrace;
        $data->name=$r->name;
        $data->iata=$r->iata;
        $data->icao=$r->icao;
        $data->awb_prefix=$r->awb;
        $data->url=$r->url;
        $data->save();
        return redirect()->route('admin.trackntrace.create')->with('success', 'Trackntrace Created!');
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
        $data=Trackntrace::find($id);
        //echo $data;
        return view('admin.trackntrace.update', ['data'=>$data]);
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
        $data=Trackntrace::find($id);
        $data->name=$r->name??$data->name;
        $data->iata=$r->iata??$data->iata;
        $data->icao=$r->icao??$data->icao;
        $data->awb_prefix=$r->awb??$data->awb;
        $data->url=$r->url??$data->url;
        $data->save();
        return redirect()->route('admin.trackntrace.index')->with('success', 'Trackntrace Updated!');
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
        $data =Trackntrace::get();
        return Datatables::of($data)->make(true);
    }
}
