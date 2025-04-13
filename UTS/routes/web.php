<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;

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

Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter {id}, maka harus berupa angka

//Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

//Register
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'postRegister']);

Route::middleware(['auth'])->group(function(){ 
    Route::get('/', [WelcomeController::class, 'index']);

Route::prefix('user')->group(function (){
    Route::get('/',[UserController::class,'index']);//menampilkan halaman awal
    Route::post('/list',[UserController::class,'list']);//menampilkan data user bentuk json / datatables
    Route::get('/create',[UserController::class,'create']);// meanmpilkan bentuk form untuk tambah user
    Route::post('/',[UserController::class,'store']);//menyimpan user data baru 
    Route::get('/create_ajax',[UserController::class,'create_ajax']);// meanmpilkan bentuk form untuk tambah user ajax js 6
    Route::post('/ajax',[UserController::class,'store_ajax']); //menyimpan user data baru ajax js 6
    Route::get('/{id}',[UserController::class,'show']);        // menampilkan detil user 
    Route::get('/{id}/edit',[UserController::class,'edit']);// menampilkan halaman form edit user
    Route::put('/{id}',[UserController::class,'update']);// menyimpan perubahan data user 
    Route::get('/{id}/edit_ajax',[UserController::class,'edit_ajax']);// menampilkan halaman form edit user ajax js 6
    Route::put('/{id}/update_ajax',[UserController::class,'update_ajax']);// menyimpan perubahan data user ajax js 6
    Route::get('/{id}/delete_ajax',[UserController::class, 'confirm_ajax']); // untuk tampilan form confirm delete ajax js 6
    Route::delete('/{id}/delete_ajax',[UserController::class, 'delete_ajax']); // untuk hapus data ajax js 6
    Route::delete('/{id}',[UserController::class,'destroy']);// menghapus data user 
    Route::get('/export_pdf', [UserController::class, 'export_pdf']);// export pdf
});

Route::middleware(['authorize:ADM,OWN'])->prefix('level')->group(function () {
    Route::get('/',[LevelController::class,'index']);//menampilkan halaman awal
    Route::post('/list',[LevelController::class,'list']);//menampilkan data user bentuk json / datatables
    Route::get('/create',[LevelController::class,'create']);// meanmpilkan bentuk form untuk tambah user
    Route::post('/',[LevelController::class,'store']);//menyimpan user data baru 
    Route::get('/create_ajax',[LevelController::class,'create_ajax']);// meanmpilkan bentuk form untuk tambah user ajax js 6
    Route::post('/ajax',[LevelController::class,'store_ajax']);//menyimpan user data baru ajax js 6
    Route::get('/{id}',[LevelController::class,'show']); // menampilkan detil user
    Route::get('/{id}/edit',[LevelController::class,'edit']);// menampilkan halaman form edit user
    Route::put('/{id}',[LevelController::class,'update']);// menyimpan perubahan data user 
    Route::get('/{id}/edit_ajax',[LevelController::class,'edit_ajax']);// menampilkan halaman form edit user ajax js 6
    Route::put('/{id}/update_ajax',[LevelController::class,'update_ajax']);// menyimpan perubahan data user  ajax js 6 
    Route::get('/{id}/delete_ajax',[LevelController::class,'confirm_ajax']);// menghapus data user ajax js 6
    Route::delete('/{id}/delete_ajax',[LevelController::class,'delete_ajax']);// menghapus data user ajax js 6
    Route::delete('/{id}',[LevelController::class,'destroy']);// menghapus data user 
    Route::get('/export_pdf', [LevelController::class, 'export_pdf']);               //export pdf
});

Route::middleware(['authorize:ADM,OWN'])->prefix('kategori')->group(function () {
    Route::get('/',[KategoriController::class,'index']);//menampilkan halaman awal
    Route::post('/list',[KategoriController::class,'list']);//menampilkan data user bentuk json / datatables
    Route::get('/create',[KategoriController::class,'create']);// meanmpilkan bentuk form untuk tambah user
    Route::post('/',[KategoriController::class,'store']);//menyimpan user data baru 
    Route::get('/create_ajax',[KategoriController::class,'create_ajax']);// meanmpilkan bentuk form untuk tambah user ajax js 6 
    Route::post('/ajax',[KategoriController::class,'store_ajax']);//menyimpan user data baru ajax js 6 
    Route::get('/{id}',[KategoriController::class,'show']); // menampilkan detil user
    Route::get('/{id}/edit',[KategoriController::class,'edit']);// menampilkan halaman form edit user
    Route::put('/{id}',[KategoriController::class,'update']);// menyimpan perubahan data user 
    Route::get('/{id}/edit_ajax',[KategoriController::class,'edit_ajax']);// menampilkan halaman form edit user ajax js 6 
    Route::put('/{id}/update_ajax',[KategoriController::class,'update_ajax']);// menyimpan perubahan data user ajax js 6 
    Route::get('/{id}/delete_ajax',[KategoriController::class,'confirm_ajax']);// menghapus data user ajax js 6 
    Route::delete('/{id}/delete_ajax',[KategoriController::class,'delete_ajax']);// menghapus data user ajax js 6 
    Route::delete('/{id}',[KategoriController::class,'destroy']);// menghapus data user 
    Route::get('/export_pdf', [KategoriController::class, 'export_pdf']);               //export pdf
});


Route::middleware(['authorize:ADM,OWN'])->prefix('barang')->group(function () {
    Route::get('/',[BarangController::class,'index']);//menampilkan halaman awal
    Route::post('/list',[BarangController::class,'list']);//menampilkan data user bentuk json / datatables
    Route::get('/create',[BarangController::class,'create']);// meanmpilkan bentuk form untuk tambah user
    Route::post('/',[BarangController::class,'store']);//menyimpan user data baru 
    Route::get('/create_ajax',[BarangController::class,'create_ajax']);// meanmpilkan bentuk form untuk tambah user ajax js 6 
    Route::post('/ajax',[BarangController::class,'store_ajax']);//menyimpan user data baru ajax js 6 
    Route::get('/{id}',[BarangController::class,'show']); // menampilkan detil user
    Route::get('/{id}/edit',[BarangController::class,'edit']);// menampilkan halaman form edit user
    Route::put('/{id}',[BarangController::class,'update']);// menyimpan perubahan data user 
    Route::get('/{id}/edit_ajax',[BarangController::class,'edit_ajax']);// menampilkan halaman form edit user ajax js 6 
    Route::put('/{id}/update_ajax',[BarangController::class,'update_ajax']);// menyimpan perubahan data user  ajax js 6 
    Route::get('/{id}/delete_ajax',[BarangController::class,'confirm_ajax']);// menghapus data user ajax js 6 
    Route::delete('/{id}/delete_ajax',[BarangController::class,'delete_ajax']);// menghapus data user ajax js 6 
    Route::delete('/{id}',[BarangController::class,'destroy']);// menghapus data user 
    Route::get('/export_pdf', [BarangController::class, 'export_pdf']);               //export pdf
});

Route::middleware(['authorize:ADM,OWN'])->prefix('supplier')->group(function () {
    Route::get('/',[SupplierController::class,'index']);//menampilkan halaman awal
    Route::post('/list',[SupplierController::class,'list']);//menampilkan data user bentuk json / datatables
    Route::get('/create',[SupplierController::class,'create']);// meanmpilkan bentuk form untuk tambah user
    Route::post('/',[SupplierController::class,'store']);//menyimpan user data baru 
    Route::get('/create_ajax',[SupplierController::class,'create_ajax']);// meanmpilkan bentuk form untuk tambah user
    Route::post('/ajax',[SupplierController::class,'store_ajax']);//menyimpan user data baru 
    Route::get('/{id}',[SupplierController::class,'show']); // menampilkan detil user
    Route::get('/{id}/edit',[SupplierController::class,'edit']);// menampilkan halaman form edit user
    Route::put('/{id}',[SupplierController::class,'update']);// menyimpan perubahan data user 
    Route::get('/{id}/edit_ajax',[SupplierController::class,'edit_ajax']);// menampilkan halaman form edit user
    Route::put('/{id}/update_ajax',[SupplierController::class,'update_ajax']);// menyimpan perubahan data user 
    Route::get('/{id}/delete_ajax',[SupplierController::class,'confirm_ajax']);// menghapus data user 
    Route::delete('/{id}/delete_ajax',[SupplierController::class,'delete_ajax']);// menghapus data user 
    Route::delete('/{id}',[SupplierController::class,'destroy']);// menghapus data user 
    Route::get('/export_pdf', [SupplierController::class, 'export_pdf']);               //export pdf
});
});