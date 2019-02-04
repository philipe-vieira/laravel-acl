<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->all();
        return view('portal.home.index', compact('posts'));
    }
}
