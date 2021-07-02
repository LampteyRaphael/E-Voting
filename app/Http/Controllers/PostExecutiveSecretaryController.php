<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class PostExecutiveSecretaryController extends Controller
{
    //


    public function index()
    {




        $allVoters = User::all();

        $allVotersCount = User::where('role', 0)->count();

       //ending of chairman
        $secretary = SecretaryCreate::all();
        $samul = PostSecretary::where('name', 'samuel lartey')->count();
        $gawey = PostSecretary::where('name', 'emmanuel gawey')->count();
        $secretaryCount = PostSecretary::all()->count();
        //ending of secretary

        return view('final.secretaryResult', compact(
            'samul',
            'gawey',
            'secretary',
            'allVoters',
            'allVotersCount',
            'secretaryCount'
        ));

    }

}
