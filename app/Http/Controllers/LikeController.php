<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response;
use App\Posts;
use App\Like;
use Validator;


class LikeController extends Controller
{
    public function new_AddLike(Request $request)
    {
    	$validator = Validator::make(
	    	$request->all(),
	    	array(
	            'p_i' => 'required',
	            'p_t_or_s' => 'required|max:300',
	        )
    	);

    	$posts = Posts::where('id', (int)Crypt::decryptString($request->p_i))->get(); 
    	$validator->after(function($validator) use($posts){
            if (!$posts) {
                $validator->errors()->add('like', 'Try again');
            }
        });

        if ($validator->fails()){
            return Response::json(array(
                                'success' => 200,
                                'data'    => $validator->errors()->all()
                            ));
        }else {

        	$add_like          = new Like();
            $add_like->post_id = (int)Crypt::decryptString($request->p_i);
            $add_like->user_id = Auth::id();
            $add_like->smailes = Crypt::decryptString($request->p_t_or_s);
            $add_like->save();

        }
    }
}
