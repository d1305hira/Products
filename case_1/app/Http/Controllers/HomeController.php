<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home_p2');
    }

    public function contents()
    {
        return view('contents');
    }

    public function access()
    {
        return view('access');
    }
}
