<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        return view('form.index');
    }
    public function store(ImageRequest $request)
    {
        //return $request->all();
        $image = new Image($request->all());
        $image->image = $request->file('image')->store('SlaskieKatowice');
        $image->save();
        return view('request.index')
        ->with('image', asset('/storage/'.$image->image));
    }
}
