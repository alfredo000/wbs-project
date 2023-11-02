<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    // public function __construct(){
    //     parent::__construct();;
    //     $this->load->model('Pengaduan');
    // }

    public function index()
    {
        $pengaduans = Pengaduan::all();
        $title = "Aktivitas Saya";
        return view('/pelapor/aktivitassaya', ['pengaduans' => $pengaduans], compact('title'));
    }
}