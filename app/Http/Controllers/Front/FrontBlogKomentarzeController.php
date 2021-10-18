<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontBlogKomentarzeController extends Controller
{
    public function show()
    {
        return view('front.blog.komentarze.index');
    }
}
