<?php

namespace App\Http\Controllers;

use App\Post;
use Gate;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // Auth::loginUsingId(9);
        Auth::logout();
        $post = Post::findOrFail($id);

//        if(Auth::user()->can('show-post',$post)){
//            return "you can update post";
//        }
//
//        $this->authorize('show-post',$post);
//        if(Gate::denies('show-post',$post)){
//            abort(403,'sorry not sorry');
//        }
        return view('post.index',compact('post'));
    }
}
