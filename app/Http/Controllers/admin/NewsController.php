<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Member;
use App\Models\NewsCategory;
use DataTables;
use Exception;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($data =News::with('category', 'member')->get());
        return view('admin.news.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "hello";
        $category=NewsCategory::all();
        $member=Member::all();
        return view('admin.news.add', ['category'=>$category, 'member'=>$member]);
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
        $data=new News;
        $data->news_category_id=$r->category_id;
        $data->title=$r->title;
        $data->image=($r->image)?$this->upload($r->image):null;
        $data->short_detail=$r->short_detail;
        $data->description=$r->description;
        $data->member_id=$r->member_id;
        $data->shares=$r->shares??null;
        $data->status=$r->status??1;
        $data->save();
        return redirect()->route('admin.news.index')->with('success', 'News Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        $category=NewsCategory::all();
        $member=Member::all();
        return view('admin.news.update', ['category'=>$category, 'member'=>$member, 'news'=>$news]);
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
        $data=News::find($id);
        $data->news_category_id=$r->category??$data->category_id;
        $data->title=$r->title??$data->title;
        $data->image=($r->image)?$this->upload($r->image):($data->image);
        $data->short_detail=$r->short_detail??$data->short_detail;
        $data->description=$r->description??$data->description;
        $data->member_id=$r->author??$data->member_id;
        $data->shares=$r->shares??$data->shares;
        $data->status=$r->status??1;
        $data->save();
        return redirect()->route('admin.news.index')->with('success', 'News Updated!');
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
        $data =News::with('category', 'member')->get();
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
