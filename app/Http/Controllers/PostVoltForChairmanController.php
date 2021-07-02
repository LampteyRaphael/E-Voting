<?php

namespace App\Http\Controllers;
use App\Http\Requests\ChairmanVoltRequest;
use App\Http\Requests\votingRequest;
use App\VoltChairman;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PostVoltForChairmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $allVoters=User::all();

         $allVotersCount=User::all()->count();

        return view("final.show",compact('allVoters','allVotersCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ChairmanVoltRequest $request)
    {
        //voting for chairmanship positions
        $post=$request->all();
        $user=new VoltChairman();
        $user->name=$post['name'];
        $user->user_id=$post['user_id'];
        $user->save();

        Mail::send('chairman.mail',$user->toArray(),function ($message){

            $message->to('raphlamptey@gmail.com','Raphael Vote Online')
                ->subject('Online Vote');
        });



        return redirect()->route('secretary.index')->with(['success'=>'You have successfully voted for chairmanship position. Thank You']);
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
