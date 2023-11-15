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

    public function show($id)
    {
        $pengaduans = Pengaduan::find($id);
        $title = "Detail Pengaduan";

        // Tampilkan halaman detail pengaduan dengan data $pengaduan
        return view('/pelapor/detailpengaduan', ['pengaduans' => $pengaduans], compact('title'));
    }

}