<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index()
    {
        return view('home', $result=[
            'title' => 'Home',
        ]);
    }

    public function help()
    {
        return view('help', $result=[
            'title' => 'Bantuan',
        ]);
    }
}
