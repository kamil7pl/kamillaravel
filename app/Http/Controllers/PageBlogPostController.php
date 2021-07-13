<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageBlogPostController extends Controller
{
    public function show()
    {
        return view('front.strona.blog.post.index');
    }
}
