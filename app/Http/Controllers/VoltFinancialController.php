<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancialVoltRequest;
use App\VoltFinance;
use Illuminate\Http\Request;

class VoltFinancialController extends Controller
{
    //
    public  function index(FinancialVoltRequest $request){

        $post=$request->all();

        $user=new VoltFinance();

        $user->name=$post['name'];

        $user->user_id=$post['user_id'];

        $user->save();

        return redirect()->route('organizer.index')->with(['success'=>'You have Successfully Voted For Financial Secretary Position.Thank You']);
    }
}
