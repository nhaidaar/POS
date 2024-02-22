<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $name)
    {
        return view('user')
            ->with('id', $id)
            ->with('name', $name);
    }
}
