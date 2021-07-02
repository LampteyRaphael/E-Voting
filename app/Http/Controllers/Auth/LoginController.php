<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/chairman';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    public function username(){

        return "name";
    }

    public function password()
    {
        return 'staffid';
    }


    public function authenticated()
    {
        if (Auth::check())
        {
            if (Auth::user()->role==1){
                return redirect()->route('executiveIndex.index');
            }
            elseif(Auth::user()->role==0){
                    $p= rand(10000,999999);
                    $pp=rand(10000,99999);
                    $u=User::where('id',Auth::user()->id)->first();
                    $u->status= $pp;
                    $u->pin_verify=$p;
                    $u->save();
                    session(['verify'=>$pp]);
                $key = "AhNsGnxj86pisinsRLOJpDPIe";
                $to = Auth::user()->name;
                $msg = 'Your Welfare Pin Code For Verification Is ' . ' ' . $p ."\n";
                $sender_id = "TAC WELFARE";
                $msg = urlencode($msg);
                $url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender_id";
                $response = file_get_contents($url);

                if ($response) {
                    $smNotify = "SMS has been sent successfully";
                } else {
                    $smNotify = "SMS has not been sent";
                }
                    return redirect()->route('pin.create');
                }
        }
        return redirect(404);
    }


    protected function validateLogin(Request $request)
    {
        $this->validate($request,

            [
            $this->username() => 'required|nullable',
            'password' => 'required',
            ],
            [
                'name.required'=>'Your Phone Number is required',
                'password.required'=>'Staff ID is required'
            ]
            );
    }




}

