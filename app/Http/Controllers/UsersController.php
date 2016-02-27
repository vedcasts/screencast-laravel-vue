<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    
    public function mimimi()
    {
        return view('users.mimimi');
    }

    public function listar()
    {
        return \Response::json(User::all(), 200);
    }
}
