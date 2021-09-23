<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class WorkshopController extends Controller
{
    public function index()
    {
        $mechanic = Mechanic::findOrFail(2);
        return $mechanic->carOwner;
    }
}
