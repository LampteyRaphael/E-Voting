<?php

namespace App\Http\Controllers;

use App\PostChairman;
use App\PostVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostVoltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return 'waooooo';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //




        return view('verify.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $post=$request['verify_code'];

         $id= Auth::user()->id;

         $verified=PostVerify::where('verify_code',$post)
             ->where('user_id',$id)->pluck('verify_code');

         if ($post==""){
             return redirect()->route('verify.index')->with(['success'=>'Please Enter Your Verification Code']);

         }else {

             foreach ($verified as $value) {

                 if ($post !==$value) {
                     return redirect()->route('verify.index')->with(['success' => 'Sorry Your Verification code does not much our record. Thank you']);

                 } elseif($post ==$value) {
                     $users = PostChairman::all();
                     return redirect()->route('chairman.index', compact('users'))->with(['success' => 'Welcome To The Voting Platform.Remember You can only vote once']);

                 }

             }
         }
       return redirect()->back()->with(['success'=>'Sorry Your Verification code does not much our record. Thank you']);;

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
