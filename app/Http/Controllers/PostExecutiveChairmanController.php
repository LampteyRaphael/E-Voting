<?php

namespace App\Http\Controllers;

use App\Member;
use App\Member1;
use App\Organizer;
use App\PostChairman;
use App\PostFinance;
use App\PostSecretary;
use App\SecretaryCreate;
use App\User;
use App\VoltChairman;
use App\VoltFinance;
use App\VoltOrganiser;
use Illuminate\Http\Request;

class PostExecutiveChairmanController extends Controller
{
    //
    public  function index(){

        $users=PostChairman::all();

        $allVoters=User::all();

        $allVotersCount=User::where('role',0)->count();

        $papa=VoltChairman::where('name','onyx papaa yamoah')->count();

        $kofi=VoltChairman::where('name','kofi owusu asante')->count();

        $ntim=VoltChairman::where('name','isaac ntim gyakari')->count();

        $chairmanVoteTurnOut=VoltChairman::all()->count();

//ending of chairman
        return view('final.chairmanResult',compact('users',  'papa', 'kofi', 'ntim',
            'allVoters',
            'allVotersCount',
            'chairmanVoteTurnOut'
        ));

    }
}
