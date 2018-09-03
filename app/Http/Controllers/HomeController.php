<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $blog_posts = Post::limit(3)->orderBy('id', 'desc')->get();

        return view('home', compact('blog_posts'));
    }
}
