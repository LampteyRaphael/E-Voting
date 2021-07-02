<?php

namespace App\Http\Controllers;

use App\Http\Requests\pinRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class secondAuthController extends Controller
{

    public function create(){
       return  view('pn.create');
    }

    public function store(pinRequest $request){

        if (Auth::user()->pin_verify === $request['pin_verify']){
            session(['key' =>$request['pin_verify'] ]);
            return redirect()->route('chairman.index');
        }
        else{
            return redirect()->back()->with(['success'=>'Pin Failed']);
        }

    }
}
