<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class UserController extends Controller
{
    // determine if a user is logged
    function isLogged(Request $request) {
        // if dont exit return de home page
        if (!$request->user()) {
            return view('main.index', [
            ]);
        }else {
            // if exist return de app
            $posts = Post::latest()->paginate(10);
            return view('main.app', [
                'posts' => $posts
            ]);
        }
    }
}
