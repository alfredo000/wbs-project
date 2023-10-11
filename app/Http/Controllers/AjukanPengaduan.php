<?php

namespace App\Http\Controllers;
class AjukanPengaduan extends Controller
{
    public function index()
    {
        return view ('ajukanpengaduan',[
            "title" => "Ajukan Pengaduan" 
        ]);
    }
}