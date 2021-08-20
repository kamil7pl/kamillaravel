<?php

namespace App\Http\Controllers\Clienthttp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ClienthttpController extends Controller
{
    public function index()
    {
        return view('clienthttp.index');
    }
    public function send()
    {
        $response = Http::asForm()->post('http://kamilinteteam.test/post.php', [
            'x1' => 'k1',
            'x2' => 'k2',
        ]);
        return $response;
    }
}
