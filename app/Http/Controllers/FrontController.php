<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function blog() 
    {
        return view('Front.blog');
    }

    public function detail()
    {
        return view('Front.detail');
    }
}
