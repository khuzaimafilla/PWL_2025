<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; // mengimpor kelas ItemControllers dari namespace

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { //untuk menghandle request HTTP GET ke URL '/' dan Ketika kita mengakses root URL, sistem akan menampilkan view 'welcome'
    return view('welcome');
});

Route::resource('items', ItemController::class); //Mendefinisikan satu route yang mengarah ke controller ItemControllers
