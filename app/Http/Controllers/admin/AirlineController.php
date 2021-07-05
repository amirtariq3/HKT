<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airline;
use DataTables;
use Exception;
class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.airline.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.airline.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new Airline;
        $data->name=$r->name;
        $data->iata=$r->iata;
        $data->icao=$r->icao;
        $data->awb=$r->awb;
        $data->country=$r->country;
        $data->save();
        return redirect()->route('admin.airline.create')->with('success', 'Airline Created!');
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
        $data=Airline::find($id);
        //echo $data;
        return view('admin.airline.update', ['data'=>$data]);
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
        $data=Airline::find($id);
        $data->name=$r->name??$data->name;
        $data->iata=$r->iata??$data->iata;
        $data->icao=$r->icao??$data->icao;
        $data->awb=$r->awb??$data->awb;
        $data->country=$r->country??$data->country;
        $data->save();
        return redirect()->route('admin.airline.index')->with('success', 'Airline Updated!');

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
        $data =Airline::get();
        return Datatables::of($data)->make(true);
    }
}
