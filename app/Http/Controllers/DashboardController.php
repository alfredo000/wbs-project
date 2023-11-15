<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/pelapor/dashboard.index',[
            "title" => "Profil Saya",
            "active" => 'myprofil', 
        ]);
    }
}
