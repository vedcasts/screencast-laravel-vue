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
        $users = User::paginate(6);
        return \Response::json($users, 200);
    }
}
