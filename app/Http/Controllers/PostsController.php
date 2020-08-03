<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Posts;
use App\Photo;
use App\Post_tag;
use Validator;


class PostsController extends Controller
{
	// Add post
    public function new_AddPost(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            array(
                'language' => 'required',
                'access_limit' => 'required'
            )
        );
        $validator->after(function($validator) use($request){

            if (empty($request->get('title')) && empty($request->get('text')) && !$request->hasfile('photos')) {

                $validator->errors()->add('posts_errors', 'Please fill in one of these fields, title, text, photo.');

            }else if(empty($request->get('language')) || $request->get('language') != 'am' && $request->get('language') != 'ru'){

                $validator->errors()->add('posts_errors', 'Please fill in the language of the fields.');

            }else if(empty($request->get('access_limit')) || $request->get('access_limit') != 'public' && $request->get('access_limit') != 'my' && $request->get('access_limit') != 'frends'){

                $validator->errors()->add('posts_errors', 'Please fill in the access limit of the fields.');

            }

            // $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
            //             $vl = Validator::make(
            //                 $request->all(),
            //                 array(
            //                     "$tag_url" => 'regex:' . $regex,
            //                 )
            //             );

        });
        dd($validator->errors()->all());


        if ($validator->fails()){

            return Response::json(array(
                                'success' => 200,
                                'data'    => $validator->errors()->all()
                            ));

        }else {

            $post           = new Posts();
            $post->user_id  = Auth::id();
            $post->title    = $request->title;
            $post->text     = $request->text;
            $post->language = $request->language;
            $post->status   = $request->access_limit;
            $post->save();


            if ($request->photos){


                foreach ($request->photos as $key) {
                    $file = $key;
                    $name = time() . '.' . $file->getClientOriginalExtension();
                    $ext  = $file->getClientOriginalName();
                    $file->move(public_path() . '/images/' . Auth::id(), $name);
                    $img_name = "images/". Auth::id() . "/" . $name;

                    $photo          = new Photo();
                    $photo->name    = $img_name;
                    $photo->post_id = $post->id;
                    $photo->save();

                }

            }
        }

    }




}
