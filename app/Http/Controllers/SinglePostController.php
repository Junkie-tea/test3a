<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SinglePostController extends Controller
{
    public function index()
    {
        return view('SinglePost');
    }

    public function show($id) {
        $post = Post::find($id);
        return redirect('/');
    }
}
