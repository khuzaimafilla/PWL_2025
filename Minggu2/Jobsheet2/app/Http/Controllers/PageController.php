<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang!';
    }

    public function about(){
        return 'Khuzaima Filla Januartha NIM 2341760078';
    }

    public function articles($id){
        return 'Halaman artikel dengan ID '.$id;
    }
}
