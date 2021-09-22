<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        /*$userRoles = array();
        foreach(auth()->user()->userHasRoles as $u)
        {
            array_push($userRoles, $u->role->name);
        }
        return $userRoles;*/
        return Role::all();
    }
}
