<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageBlogKomentarzController extends Controller
{
    public function show()
    {
        return view('front.strona.blog.komentarz.index');
    }
}
