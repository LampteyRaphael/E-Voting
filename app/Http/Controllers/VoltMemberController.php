<?php

namespace App\Http\Controllers;

use App\Http\Requests\Member1VoltRequest;
use App\Member;
use Illuminate\Http\Request;

class VoltMemberController extends Controller
{
    //

    public  function index(Member1VoltRequest $request){

        $post=$request->all();

        $user=new Member();

        $user->name=$post['name'];

        $user->user_id=$post['user_id'];

        $user->save();


  return redirect()->route('member1.show',1)->with(['success'=>'Thank You For Your Vote.We Really Appreciate']);
    }

}
