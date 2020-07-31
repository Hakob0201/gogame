<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Posts;
use App\Photo;
use App\Post_tag;
use Validator;
use Session;

class PostsController extends Controller
{
	// Add post
    public function new_AddPost(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'language' => 'required',
            'access_limit' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->all());
        }


        $post  = new Posts();

        if ($request->title)
        {
            $post->title = $request->title;
        }

        if ($request->text)
        {
            $post -> text = $request->text;
        }

        $post -> language = $request->language;
        $post -> status = $request->access_limit;
        $post->user_id = Auth::id();
        $post ->save();


        if ($request->photos)
        {
            foreach ($request->photos as $key) {
                $file = $key;
                $name = rand().'.'.$file->getClientOriginalExtension();
                $ext= $file->getClientOriginalName();
                $file->move(public_path().'/images/'.Auth::id(),$name);
                $img_name = "images/". Auth::id() ."/". $name;

                $photo = new Photo();
                $photo->name = $img_name;
                $photo->post_id = $post->id;
                $photo->save();

            }
//            return response()->json(['product'=>$product->id]);
        }

//        if ($request->tags_u_t)
//        {
//            foreach ($request->photos as $key)
//            {
//                return response()->json($request);
//
//            }
//        }



//        return response()->json($request);



    }




}
