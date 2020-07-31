<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Posts;
use App\Photo;

class MainController extends Controller
{
    public function index()
    {
        $data = Posts::where('user_id',Auth::id())->with('post_photo')->get();

        return view('index')->with('data',$data);
    }
}
