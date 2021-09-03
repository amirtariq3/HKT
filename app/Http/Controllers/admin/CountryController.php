<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Continent;
use App\Models\City;
use DataTables;
use Exception;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.country.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Continent::all();
        return view('admin.country.add', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //$data=$r->continen();die;
        //dd($data);
        $data=new Country;
        $data->name=$r->name;
        $data->code=$r->code;
        $data->continent_id=$r->continent;
        $data->image=($r->image)? $this->upload($r->image): null;
        $data->status=$r->statu??1;
        $data->save();
        return redirect()->route('admin.country.index')->with('success', 'Country Created!');
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
        $data=Country::find($id);
        $con=Continent::all();
        //echo $data;
        return view('admin.country.update', ['data'=>$data, 'con'=>$con]);
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
        $data=Country::find($id);
        $data->name=$r->name??$data->name;
        $data->code=$r->code??$data->code;
        $data->image=($r->image)? $this->upload($r->image):$data->image;
        $data->status=$r->statu??1;
        $data->save();
         redirect()->route('admin.country.index')->with('success', 'Country Updated!');
    }

    
    public function destroy($id)
    {
       
    }

    public function datatable()
      {
        $data =Country::with('continent')->get();
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
