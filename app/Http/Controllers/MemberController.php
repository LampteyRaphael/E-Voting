<?php

namespace App\Http\Controllers;

use App\Http\Requests\Member1VoltRequest;
use App\Member;
use App\Member1;
use App\Organizer;
use App\Photo;
use App\PostFinance;
use App\PostSecretary;
use App\VoltChairman;
use App\VoltFinance;
use App\VoltOrganiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $users=Member1::all();
        return view('member1.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input=$request->all();

        if ($file=$request->file('photo_id')){

            $name=time().$file->getClientOriginalName();

            $file->move('images',$name);

            $photo =Photo::create(['file'=>$name]);

            $input['photo_id']=$photo->id;
        }

        Member1::create($input);

        return redirect()->route('member1.index')->with(['success'=>'Successfully Registered']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id=null)
    {
        $chairman=VoltChairman::where('user_id',Auth::user()->id)->pluck('name')->first();
        $secretary=PostSecretary::where('user_id',Auth::user()->id)->pluck('name')->first();
        $finance=VoltFinance::where('user_id',Auth::user()->id)->pluck('name')->first();
        $organizer=VoltOrganiser::where('user_id',Auth::user()->id)->pluck('name')->first();
        $member=Member::where('user_id',Auth::user()->id)->pluck('name')->first();

        return view('member1.show',[
            'chairman'=>$chairman,
            'secretary'=>$secretary,
            'finance'=>$finance,
            'organizer'=>$organizer,
            'member'=>$member,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
