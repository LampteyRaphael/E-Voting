<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecondAuthPostController extends Controller
{
    public function store(Request $request){

        if (Auth::user()->pin_verify === $request['pin_verify']){

            return redirect()->route('chairman.index');
        }
        else{
            return redirect()->back()->with(['success'=>'Pin Failed']);
        }

    }
}
