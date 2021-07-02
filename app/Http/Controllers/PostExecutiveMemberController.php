<?php

namespace App\Http\Controllers;

use App\Member;
use App\Member1;
use App\User;
use Illuminate\Http\Request;

class PostExecutiveMemberController extends Controller
{

    public  function index(){
        $allVoters=User::all();
        $allVotersCount=User::where('role',0)->count();
        $member=Member1::all();
        $bless=Member::where('name','bless kwaku agbetsiafa')->count();
        $deborah=Member::where('name','deborah dongotey')->count();
        $elizabath=Member::where('name','elizabath bentum')->count();
        $magdalene=Member::where('name','magdalene ayitey quaye')->count();
        $bismark=Member::where('name','bismark bonsu')->count();
        $memberCount=Member::all()->count();
        return view('final.membersResult',compact('memberCount',
            'bless',
            'deborah',
            'elizabath',
            'magdalene',
            'bismark',
            'member',
            'allVoters',
            'allVotersCount'
        ));

    }


    public function users(){

        return view('final.register');
    }


    public  function userpost(Request  $request){

          User::create([
            'name' => $request['name'],
            'email' => 'raphael@gmail.com',
            'password' => bcrypt($request['password']),
            'another_name'=>$request['another_name'],
        ]);

        return  redirect()->back()->with(['success'=>'You have Successfully Save']);


    }



}
