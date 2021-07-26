<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;
use Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data=News::all()->where('news_category_id', $id);
        //echo $data;die
        
        return view('frontend.news.list', ['data'=>$data]);
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
        
        $data=new News;
        $data->news_category_id=$r->category_id;
        $data->title=$r->title;
        $data->image=($r->image)?$this->upload($r->image):null;
        $data->short_detail=$r->short_detail;
        $data->description=$r->description;
        $data->member_id=$user->id;;
        $data->shares=$r->shares??null;
        $data->status=$r->status??1;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=News::find($id);
        //echo $data;
        return view('frontend.news.detail', ['data'=>$data]);
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
        $data=NewsCategory::all();
        return view('frontend.dashboard.news.update', ['data'=>$data, 'news'=>$news]);
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
        $user=Auth::guard('member')->user();
        $data=News::find($id);
        $data->news_category_id=$r->category_id??$data->news_category_id;
        $data->title=$r->title??$data->title;
        $data->image=($r->image)?$this->upload($r->image):$data->image;
        $data->short_detail=$r->short_detail??$data->short_detail;
        $data->description=$r->description??$data->description;
        $data->member_id=$user->id;
        $data->shares=$r->shares??$data->shares;
        $data->status=$r->status??$data->status;
        $data->save();
        return redirect()->route('frontend.dashboard.news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=News::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function add()
    {
        $data=NewsCategory::all();
        return view('frontend.dashboard.news.add_news', ['data'=>$data]);
    }

    public function list()
    {
        $user=Auth::guard('member')->user();
        $data=News::all()->where('member_id', $user->id);
        return view('frontend.dashboard.news.news', ['data'=>$data]);
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
