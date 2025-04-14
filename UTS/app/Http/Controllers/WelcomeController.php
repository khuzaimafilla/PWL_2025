<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\LevelModel;
use App\Models\SupplierModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(){
        $levelCount = LevelModel::count();
        $userCount = UserModel::count();
        $kategoriCount = KategoriModel::count();
        $barangCount = BarangModel::count();
        $supplierCount = SupplierModel::count();

        $breadscrumb = (object)[
            'title' => 'Profil Pengguna',
            'list'  => ['Home', 'Profile'],
        ];

        $activeMenu = 'dashboard';

        // Ambil user yang sedang login
        $user = Auth::user();

        return view('welcome', [ 'breadcrumb' => $breadscrumb, 'activeMenu' => $activeMenu,'user' => $user, 
        'levelCount'    => $levelCount,
        'userCount'     => $userCount,
        'kategoriCount' => $kategoriCount,
        'barangCount'   => $barangCount,
        'supplierCount' => $supplierCount]);
    }
}