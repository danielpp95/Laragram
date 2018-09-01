<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

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

    function showUser ($username) {
        $user = $this->findByUsername($username);
        $userPosts = $user->posts()->paginate(9);
        return view('users.index', [
            'user' => $user,
            'userPosts' => $userPosts,
        ]);
    }

    private function findByUsername($username) {
        return $user = User::where('username', $username)->firstOrFail();
    }
}
