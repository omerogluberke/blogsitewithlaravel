<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    public function getIndex(){
        $posts = Post::paginate(6);
        return view('blog.index',compact('posts', $posts));
    }

    public function getSingle($slug) {
        $post = Post::where('slug','=',$slug)->first();

        return view('blog.single',compact('post',$post));
    }
}
