<?php

namespace App\Http\Controllers;
use App\Organizer;
use App\User;
use App\VoltOrganiser;
class PostExecutiveOrganizerController extends Controller
{
    //
    public  function index(){
        $allVoters=User::all();
        $allVotersCount=User::where('role',0)->count();
        $organisers=Organizer::all();
        $dennis=VoltOrganiser::where('name','dennis agyemang')->count();
        $albert=VoltOrganiser::where('name','albert senanu adjeyi')->count();
        $isaac=VoltOrganiser::where('name','isaac afari amoabeng')->count();
        $organisersCount=VoltOrganiser::all()->count();
        //ending of the Organisers
        return view('final.organiserResult',compact(
            'dennis',
            'albert',
            'isaac',
            'organisers',
            'allVoters',
            'allVotersCount',
            'organisersCount'
        ));

    }
}
