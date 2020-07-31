<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Users;
use Validator;
use Session;
use Hash;
use DB;


class LoginController extends Controller
{
	// users login
    public function login(Request $request){
        $v = Validator::make($request->all(),[
            'email_login' => 'required|email',
            'password_login' => 'required',
        ]);
        if ($v->fails()){
        	$v->errors()->add('login_errors', 'error');
            return Redirect::to('/')->withErrors($v)->withInput();
        }else{
            $email = $request->email_login;
            $password = $request->password_login;

            $user = Users::where('email',$email)->get();

            if (count($user) == 0){
                return Redirect::to('/')->withErrors(['login_errors_second' => ['The email address or password does not match']])->withInput();
            }else if (!Hash::check($password, $user[0]->password)){
                return Redirect::to('/')->withErrors(['login_errors_second' => ['The email address or password does not match']])->withInput();
            }else if ($user[0]->status == 0){
                return Redirect::to('/')->withErrors(['login_errors_second' => ['Verify your email address so we know it’s really you—and so we can send you important information about your  account.']])->withInput();
            }else{
                $user_data = array(
                    'email'  => $request->get('email_login'),
                    'password' => $request->get('password_login')
                );
                if(Auth::attempt($user_data))
                {
                    $users = Auth::user();
                }
//                dd($request->all());

//                foreach ($user as $user) {
//                    if ($user->email_verified_at==''){
//                        return Redirect::to('/')->withErrors("Verify your email address so we know it’s really you—and so we can send you important information about your  account.")->withInput();;
//                    }
//                }
                $data = Auth::user();
                return Redirect::to('/');

            }

        }
    }


    // users logout
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }


}
