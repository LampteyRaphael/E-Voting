<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PDF;

class VoterRegisterController extends Controller
{
    //

    public function index(){

        $allVoters=User::all()->where('role',0);

        $allVotersCount=User::all()->where('role',0)->count();

        return view("final.show",compact('allVoters','allVotersCount'));

    }

    public function pdf(){

        $allVoters=User::all()->where('role',0);

        $allVotersCount=User::all()->where('role',0)->count();

        $pdf = PDF::loadView("final.print",compact('allVoters','allVotersCount'));

        return $pdf->stream('registere_ec.pdf');
    }
}
