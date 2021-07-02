<?php

namespace App\Http\Controllers;

use App\PostFinance;
use App\User;
use App\VoltFinance;
use Illuminate\Http\Request;

class PostExecutiveFinanceController extends Controller
{
    //

    public  function index(){


        $allVoters=User::all();

        $allVotersCount=User::where('role',0)->count();

        $financesecretary=PostFinance::all();


        $angel=VoltFinance::where('name','angela tetteh amarteifio')->count();
        $financesecretaryCount=VoltFinance::all()->count();

        //ending of financial secretary

        return view('final.financeResult',compact(
            'angel',
            'allVoters',
            'allVotersCount',
        'financesecretary',
        'financesecretaryCount'
        ));

    }
}
