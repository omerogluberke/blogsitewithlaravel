<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http;


class PagesController extends Controller {

    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome',compact('posts', $posts));
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }
}

?>


