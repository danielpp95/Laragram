<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view('main.app', [
                ]);
        }
    }
}
