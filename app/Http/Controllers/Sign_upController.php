<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Validator;
use DB;
use Hash;
use Session;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;

class Sign_upController extends Controller
{
    // student register
    public function sign_up(Request $request){
        $validator = Validator::make(
           $request->all(),
            array(
                'name' => 'required|string|min:3|max:255',
                'surname' => 'required|string|min:3|max:255',
                'email' => 'required|email',
                'password' => 'required|min:6|max:255',
                'repeat_password' => 'required|same:password'
            )
        );

        $users = Users::where('email', $request->email)->first();
        $validator->after(function($validator) use($users){
            if ($users) {
                $validator->errors()->add('email', 'urish mailov porceq');
            }
        });

        if ($validator->fails()) {
            // Переданные данные не прошли проверку
            $validator->errors()->add('sign_up_errors', 'error');
            return Redirect::to('/')
                            ->withErrors($validator)
                            ->withInput();
        }else {
            $add_users           = new Users();
            $add_users->name     = $request->name;
            $add_users->surname  = $request->surname;
            $add_users->email    = $request->email;
            $add_users->password = Hash::make($request->password);
            $add_users->username = '@' .  $request->name . '_' . time();
            $add_users->save();


            $url = array('name' => $add_users->name, 'id' => $add_users->id, 'hash' => md5($add_users->email . $add_users->id));
            Mail::send('mail_blade/gmail', $url, function($m) use($add_users){
                $m->from('onlinedastest@gmail.com', 'GoGame');
                $m->to($add_users->email, "$add_users->name $add_users->surname")
                    ->subject('Account verification');
            });

            return Redirect::to('/');
        }
    }


    // user verification
    public function verification($hash, $id){
        $users = Users::where('id', $id)->first();
        if ($users) {
            if (md5($users->email . $users->id) == $hash) {
                Users::where('id', $id)->update(['status' => 1]);
                return Redirect::to('/');
            }
        }
    }
}
