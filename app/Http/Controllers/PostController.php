<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('/pelapor/aktivitassaya',[
            "title" => "Aktivitas Saya",
            "active" => 'aktivitassaya',    
        ]);
        return view('/pelapor/tatacarapengaduan',[
            "title" => "Tata Cara Pengaduan",
            "active" => 'tatacarapengaduan',    
        ]);
        return view('/pelapor/bantuan',[
            "title" => "Bantuan",
            "active" => 'bantuan',    
        ]);
        return view('signin',[
            "title" => "Sign In",
            "active" => 'signin',    
        ]);
        return view('login',[
            "title" => "Login",
            "active" => 'login',    
        ]);
    }

    public function index1()
    {
        return view('/pelapor/tentangwbs',[
            "title" => "Tentang WBS",
            "active" => 'tentangwbs'
        ]);
    }
    public function index2()
    {
        return view('/pelapor/alurpengaduan',[
            "title" => "Alur Pengaduan",
            "active" => 'alurpengaduan',    
        ]);
    }
    public function index3()
    {
        return view('/pelapor/tatacarapengaduan',[
            "title" => "Tata Cara Pengaduan",
            "active" => 'tatacarapengaduan',    
        ]);
    }
}
