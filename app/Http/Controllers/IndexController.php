<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->user());
        // if (Auth::check())
        // {
        //     dd('user');
        // }
        // else {
        //     dd('guest');
        // }
        return view('index');
    }

}
