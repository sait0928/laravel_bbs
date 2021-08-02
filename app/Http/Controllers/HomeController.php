<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('home', [
            'posts' => $posts,
        ]);
    }
}
