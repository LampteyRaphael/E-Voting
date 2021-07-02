<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizerVoltRequest;
use App\VoltOrganiser;
use Illuminate\Http\Request;

class VoltOrganizerController extends Controller
{
    //

    public  function index(OrganizerVoltRequest $request){

        $post=$request->all();

        $user=new VoltOrganiser();

        $user->name=$post['name'];

        $user->user_id=$post['user_id'];

        $user->save();

        return redirect()->route('member1.index')->with(['success'=>'You have Successfully Voted For Organizer Position.Thank You']);
    }
}
