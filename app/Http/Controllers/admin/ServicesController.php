<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Validator;
use DataTables;
use Exception;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    return view('admin.services.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $c = Validator::make($r->all(), [
            'name' => 'required', 
            'status' => 'required'
        ]);
        if($c->fails()){
            return redirect()->back()->with('error', $c->errors())->withInput();
        }else{
            $cat = Service::create([
                'name'=> $r->name, 
                'image'=> ($r->image)? $this->upload($r->image): null,
                'detail'=>$r->detail??null,
                'status' => $r->status??1
            ]);
            return redirect()->route('admin.services.index')->with('success', 'Service Created!');
        }


        
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
        $data=Service::find($id);
        //echo $data;
        return view('admin.services.update', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r,$id)
    {
        $data=Service::find($id);
        //echo $data;
        $data->name=$r->name??$data->name;
        $data->image=($r->image)? $this->upload($r->image):$data->image;
        $data->detail=$r->detail??$data->detail;
        $data->status=$r->status;
        $data->save();
        return redirect()->route('admin.services.index')->with('success', 'Service Updated!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Service::destroy($id)){
            return response()->json(['success' => 'Service deleted!']);
        }else{
            return response()->json(['error' => 'Service was not deleted!']);
        }
    }

  public function datatable()
      {
        $data =Service::get();
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
