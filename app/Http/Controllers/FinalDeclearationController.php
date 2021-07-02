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
use PDF;

class FinalDeclearationController extends Controller
{
    //
    public  function index(){

      $users=PostChairman::all();

      $allVoters=User::all();
      $allVotersCount=User::where('role',0)->count();
      $chairmanVoteTurnOut=VoltChairman::count();
      //ending of chairman
        $secretary=SecretaryCreate::all();
        $secretaryCount=PostSecretary::all()->count();
        //ending of secretary

        $financesecretary=PostFinance::all();
        $financesecretaryCount=VoltFinance::all()->count();
        //ending of financial secretary

        $organisers=Organizer::all();
        $organisersCount=VoltOrganiser::all()->count();
        //ending of the Organisers

        $member=Member1::all();
        $memberCount=Member::all()->count();

        return view('final.index',compact('users',
     'memberCount',
        'secretary',
        'financesecretary',
        'organisers',
        'member',
        'allVoters',
        'allVotersCount',
        'chairmanVoteTurnOut',
        'secretaryCount',
        'financesecretaryCount',
        'organisersCount'
        ));

    }


    public function pdf(){


        $users=PostChairman::all();

        $allVoters=User::all();

        $allVotersCount=User::where('role',0)->count();


        $papa=VoltChairman::where('name','onyx papaa yamoah')->count();

        $kofi=VoltChairman::where('name','kofi owusu asante')->count();

        $ntim=VoltChairman::where('name','isaac ntim gyakari')->count();

        $chairmanVoteTurnOut=VoltChairman::all()->count();

//ending of chairman

        $secretary=SecretaryCreate::all();

        $samul=PostSecretary::where('name','samuel lartey')->count();
        $gawey=PostSecretary::where('name','emmanuel gawey')->count();

        $secretaryCount=PostSecretary::all()->count();

        //ending of secretary

        $financesecretary=PostFinance::all();


        $angel=VoltFinance::where('name','angela tetteh amarteifio')->count();
        $financesecretaryCount=VoltFinance::all()->count();

        //ending of financial secretary

        $organisers=Organizer::all();
        $dennis=VoltOrganiser::where('name','dennis agyemang')->count();
        $albert=VoltOrganiser::where('name','albert senanu adjeyi')->count();
        $isaac=VoltOrganiser::where('name','isaac afari amoabeng')->count();

        $organisersCount=VoltOrganiser::all()->count();

        //ending of the Organisers

        $member=Member1::all();
        $bless=Member::where('name','bless kwaku agbetsiafa')->count();
        $deborah=Member::where('name','deborah dongotey')->count();
        $elizabath=Member::where('name','elizabath bentum')->count();
        $magdalene=Member::where('name','magdalene ayitey quaye')->count();
        $bismark=Member::where('name','bismark bonsu')->count();
        $memberCount=Member::all()->count();

        $pdf = PDF::loadView('final.pdf',compact('users',
            'memberCount',
            'papa',
            'kofi',
            'ntim',
            'samul',
            'gawey',
            'secretary',
            'angel',
            'dennis',
            'albert',
            'isaac',
            'bless',
            'deborah',
            'elizabath',
            'magdalene',
            'bismark',
            'financesecretary',
            'organisers',
            'member',
            'allVoters',
            'allVotersCount',
            'chairmanVoteTurnOut',
            'secretaryCount',
            'financesecretaryCount',
            'organisersCount'
        ));

        return $pdf->stream('electionresult.pdf');
    }
}
