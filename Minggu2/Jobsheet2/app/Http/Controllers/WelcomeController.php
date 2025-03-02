<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello WOrld';
    }
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Andi']);
    //     }

    public function greeting() {
        return view('blog.hello')
        ->with('name','Filla')
        ->with('occupation','Astronaut');
    }
}
