<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airport;
use DataTables;
use Exception;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.airport.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.airport.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new Airport;
        $data->name=$r->name;
        $data->iata=$r->iata;
        $data->icao=$r->icao;
        $data->country=$r->country;
        $data->save();
        return redirect()->route('admin.airport.create')->with('success', 'Airport Created!');
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
        $data=Airport::find($id);
        //echo $data;
        return view('admin.airport.update', ['data'=>$data]);
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
        $data=Airport::find($id);
        $data->name=$r->name??$data->name;
        $data->iata=$r->iata??$data->iata;
        $data->icao=$r->icao??$data->icao;
        $data->country=$r->country??$data->country;
        $data->save();
        return redirect()->route('admin.airport.index')->with('success', 'Airport Updated!');

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
        $data =Airport::get();
        return Datatables::of($data)->make(true);
    }
}
