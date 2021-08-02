<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function insertPost()
    {
        $user_name = $_POST['user_name'];
        if ($user_name === '') {
            $user_name = '名無しさん';
        }
        $content = $_POST['content'];

        DB::table('posts')->insert([
            'user_name' => $user_name,
            'content' => $content,
        ]);

        return redirect('/');
    }
}
