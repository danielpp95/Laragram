<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    function upload() {
        return view('posts.upload', [

        ]);
    }

    function uploadPost (Request $request) {
        $image = $request->file('image');
        $user = $request->user();

        $post = Post::create([
            'user_id' => $user->id,
            'caption' => $request->input('caption'),
            'image' => $image->store('messages', 'public')
        ]);

        return redirect('/');
    }
}
