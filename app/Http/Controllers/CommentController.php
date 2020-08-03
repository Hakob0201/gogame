<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response;
use App\Posts;
use App\Comment;
use Validator;

class CommentController extends Controller
{

    public function new_AddComment(Request $request)
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
                $validator->errors()->add('comment', 'Try again');
            }
        });

        if ($validator->fails()){
            return Response::json(array(
                                'success' => 200,
                                'data'    => $validator->errors()->all()
                            ));
        }else {

        	$add_comment          = new Comment();
            $add_comment->post_id = (int)Crypt::decryptString($request->p_i);
            $add_comment->text    = $request->p_t_or_s;
            $add_comment->save();

        }
    }

    public function PrintComment(Request $request)
    {

        $data = Comment::where('post_id',(int)Crypt::decryptString($request->p_i))->get();
        return response()->json($data);
    }

}
