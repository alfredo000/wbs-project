<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AjukanPengaduanController extends Controller
{
    // public function __construct(){
    //     parent::__construct();;
    //     $this->load->model('Pengaduan');
    // }

    public function index()
    {
        $title = "Ajukan Pengaduan";
        $pengaduan = Pengaduan::all();
        return view ('ajukanpengaduan', [
            'pengaduan' => $pengaduan
        ], compact('title'));
    }

    public function create()
    {
        return view('ajukan_pengaduan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis_terlapor' => 'required',
            'lingkup' => 'required',
            'judul' => 'required|max:255',
            'tanggal_kejadian' => 'required',
            'keterangan' => 'required',
            'nama_terlapor' => 'required',
            'jabatan_terlapor' => 'required',
            'instansi_terlapor' => 'required',
            'nama_pelapor' => 'nullable',
            'nomor_identitas' => 'nullable',
            'nomor_hp' => 'nullable',
            'email' => 'nullable',
            'instansi_pelapor' => 'nullable',
            'judul_file' => 'nullable',
            'gambar' => 'nullable'
        ]);

        $data['jenis_terlapor'] = $request->input('jenis_terlapor', 'Nilai Default atau Nilai yang Sesuai');

        // Simpan data ke dalam database
        Pengaduan::create($data);

        return redirect()->route('aktivitassaya.index')->with('success', 'Pengaduan Berhasil Diajukan');
    }
    
    // public function update(Request $request, AjukanPengaduanController $aktivitassaya)
    // {
    //     // Validasi data yang dikirim dari formulir edit data
    //     $request->validate([
    //         'jenis_terlapor' => 'required',
    //         'lingkup' => 'required',
    //         'judul' => 'required|max:255',
    //         'tanggal_kejadian' => 'required',
    //         'keterangan' => 'required',
    //         'nama_terlapor' => 'required',
    //         'jabatan_terlapor' => 'required',
    //         'instansi_terlapor' => 'required',
    //         'nama_pelapor' => 'nullable',
    //         'nomor_identitas' => 'nullable',
    //         'nomor_hp' => 'nullable',
    //         'email' => 'nullable',
    //         'instansi_pelapor' => 'nullable',
    //         'judul_file' => 'nullable',
    //         'gambar' => 'nullable'
    //         // Add     public function edit(AjukanPengaduan $aktivitassaya) validation rules as needed
    //     ]);
    
    //     // Update the model with the validated data
    //     $aktivitassaya->update($request->all());
    
    //     // Redirect to the appropriate page after successfully updating
    //     return redirect()->route('aktivitassaya.index');
    // }
    
    // public function destroy(AjukanPengaduanController $aktivitassaya)
    // {
    //     // Hapus data dari database
    //     $aktivitassaya->delete();
    
    //     // Redirect ke halaman yang sesuai
    //     return redirect()->route('aktivitassaya.index');
    // }
}