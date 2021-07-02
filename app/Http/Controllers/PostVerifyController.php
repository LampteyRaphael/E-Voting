<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostVerifyRequest;
use App\PostVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostVerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=PostVerify::where('user_id',Auth::user()->id)->get();

        foreach ($post as $item) {

            $post = $item->verify_code;
        }

        return view('verify.index',compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post=PostVerify::where('user_id',Auth::user())
            ->get();
        foreach ($post as $item) {
            $post = $item->verify_code;
        }

        return view('verify.create',compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostVerifyRequest $request)
    {
        $verify=new PostVerify();

        $verify->verify_code=$request['verify_code'];

        $verify->user_id=$request['user_id'];

        $verify->save();

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
    public function update(Request $request, $id)
    {
        //


//        return   $v= PostVerify::where('verify_code',$id)->get();
//
//        return  $v->hiden;
//     $request->all();


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
}
