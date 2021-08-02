<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'name' => 'name',
            'content' => 'content',
        ]);
    }
}
