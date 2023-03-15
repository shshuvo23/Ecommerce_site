<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function login()
    {
        return view('website.auth.index');
    }

}
