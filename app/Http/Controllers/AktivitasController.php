<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AktivitasController extends Controller
{
    public function index()
    {

        $title = "Aktivitas Saya";
            $user = Auth::user();

            if ($user) {
                $aktivitassaya = $user->aktivitassaya; 
            } else {
                $aktivitassaya = null;
            }
            
            return view('aktivitassaya', compact('title', 'aktivitassaya'));
        // $user = Auth::user();
        // $title = "Aktivitas Saya";

        // if ($user->hasSubmittedComplain()) {
        //     // User sudah mengajukan pengaduan
        //     $aktivitassaya = $user->aktivitassaya;
        //     return view('aktivitassaya', compact('title', 'aktivitassaya'));
        // } else {
        //     // User sudah login tapi belum mengajukan pengaduan
        //     return view('aktivitassaya', compact('title'));
        // }
    }

    // public function create()
    // {
    //     // Metode ini digunakan jika Anda ingin menampilkan formulir untuk membuat aktivitas baru.
    //     return view('aktivitas.create');
    // }

    // public function store(Request $request)
    // {
    //     // Metode ini digunakan untuk menyimpan aktivitas baru ke database.
    //     // Validasi data dari $request jika diperlukan.
    //     $validatedData = $request->validate([
    //         'user_id' => 'required',
    //         'pengaduan_id' => 'required',
    //     ]);

    //     // Simpan aktivitas ke database
    //     AktivitasUser::create($validatedData);

    //     return redirect('/aktivitassaya')->with('success', 'Pengaduan berhasil diajukan.');
    // }

}
