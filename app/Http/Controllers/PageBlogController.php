<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageBlogController extends Controller
{
    public function show()
    {
        return view('front.strona.blog.index');
    }
}
