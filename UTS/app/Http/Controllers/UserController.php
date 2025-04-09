<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = UserModel::all();
        return view('user.index', ['data' => $data]);
    }
}

