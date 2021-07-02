<?php

namespace App\Http\Controllers;

use App\Photo;
use App\SecretaryCreate;
use Illuminate\Http\Request;

class CreateSecretaryController extends Controller
{
    public function index(Request $request){


        $input=$request->all();

        if ($file=$request->file('photo_id')){

            $name=time().$file->getClientOriginalName();

            $file->move('images',$name);

            $photo =Photo::create(['file'=>$name]);

            $input['photo_id']=$photo->id;
        }

        SecretaryCreate::create($input);



        return redirect()->route('secretary.index')->with(['success1'=>'Successfully Registered']);
    }
}
