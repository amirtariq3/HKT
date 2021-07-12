<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Membershiptype;
use Hash;
use Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Membershiptype::all();
       return view('frontend.signup', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data=new Member;
        $data->name=$r->name;
        $data->gender=$r->gender;
        $data->company=$r->company;
        $data->designation=$r->designation;
        $data->phone=$r->phone;
        $data->mobile=$r->mobile??null;
        $data->email=$r->email;
        $data->image=($r->image)? $this->upload($r->image):null;
        $data->password=Hash::make($r->password);
        $data->skype=$r->skype??null;
        $data->whatsupp	=$r->whatsupp??null;
        $data->viber=$r->viber??null;
        $data->gtalk=$r->gtalk??null;
        $data->line=$r->line??null;
        $data->other=$r->other??null;
        $data->membership_type_id=$r->membership_type_id;
        $data->status=$r->status??1;
        $data->save();
        return redirect()->route('frontend.login')->with('success', 'Member Created!');
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
        //
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
        $data=Member::find($id);
        $data->name=$r->name??$data->name;
        $data->gender=$r->gender??$data->gender;
        $data->company=$r->company??$data->company;
        $data->designation=$r->designation??$data->designation;
        $data->phone=$r->phone;
        $data->mobile=$r->mobile??$data->designation;
        $data->email=$r->email??$data->email;
        $data->image=($r->image)? $this->upload($r->image):$data->email;
        $data->password=Hash::make($r->password);
        $data->skype=$r->skype??$data->skype;
        $data->whatsupp	=$r->whatsupp??$data->whatsupp;
        $data->viber=$r->viber??$data->viber;
        $data->gtalk=$r->gtalk??$data->gtalk;
        $data->line=$r->line??$data->line;
        $data->other=$r->other??$data->other;
        $data->membership_type_id=$r->membership_type_id??$data->other;
        $data->status=$r->status??$data->status;
        $data->save();
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

    public function login(Request $request)
    {
        $credentional=[

            'email'=>$request['email'],
            'password'=>$request['password'],
        ];

        //dd($credentional);
        if (Auth::guard('member')->attempt($credentional)) {
            $user = Auth::guard('member')->user();
            return  redirect()->route('frontend.index');
        }
        else
        {
            return redirect()->back()->with('alert', 'Email or password is incorrect!');
        }
    }

    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect()->route('frontend.login');
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
