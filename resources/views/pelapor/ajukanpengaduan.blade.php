@php
    $hideFooter = true; // Atur ini untuk menyembunyikan footer
@endphp
@extends('layouts.main')
@section('container')
<style>
    body {
        background-color: #F5F5F5;
        margin: 0;
        padding: 0;
    }
    .form-container {
            width: 50%;
            margin: 0 auto;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input, .form-group select, .form-group textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group select {
            padding: 10px;
        }

        .form-group textarea {
            resize: vertical;
        }
</style>
<div class="container">
    <div style="padding-left:1%;">
        <h6><b>Ajukan Pengaduan</b></h6>
    </div>
</div>
<div style="padding-top: 1%;">  
    <div class="card container" style="border-radius:10px;align-items: justify;display: flex;">
        <div class="row">
            <div class="col-md-6"style="padding-left:40px;padding-right:60px;padding-top:10px;margin-top: 8px; padding-bottom:20px;">
                {{-- <form method="post" action="/aktivitassaya" class="mb-5"> --}}
                <form method="POST" action="/ajukanpengaduan" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom:25px;">
                        <p for="jenis_terlapor">Jenis Terlapor<span style="color: red"> *</span></p>
                        <select id="jenis_terlapor" name="jenis_terlapor" required style="margin-top:-5px;height: 25px; width: 100%;">
                            <option value="Option 0" selected disabled>Pilih Jenis Terlapor</option>
                            <option value="Dewan Komisaris">Dewan Komisaris</option>
                            <option value="Dewan Direksi">Dewan Direksi</option>
                            <option value="Selain Dewan Komisaris & Dewan Direksi">Selain Dewan Komisaris & Dewan Direksi</option>
                        </select>
                    </div>                    
                    <div style="margin-bottom:10px;">
                        <p for="lingkup" name="lingkup" style="margin-top:-15px;">Lingkup <span style="color: red;"> *</span></p>
                        <select id="lingkup" name="lingkup" required style="margin-top:-5px;height: 25px; width: 100%;">
                            <option value="Option 0" selected disabled>Pilih Lingkup</option>
                            <option value="Benturan Kepentingan">Benturan Kepentingan</option>
                            <option value="Gratifikasi">Gratifikasi</option>
                            <option value="Pemerasan">Pemerasan</option>
                            <option value="Penyalahgunaan Jabatan untuk Kepentingan Lain di Luar Perusahaan">Penyalahgunaan Jabatan untuk Kepentingan Lain di Luar Perusahaan</option>
                            <option value="Penyimpangan dari Peraturan dan Perundang-undangan yang Berlaku">Penyimpangan dari Peraturan dan Perundang-undangan yang Berlaku</option>
                            <option value="Penyimpangan dari Peraturan dan Perundang-undangan yang Berlaku">Penyimpangan dari Peraturan dan Perundang-undangan yang Berlaku</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul<span style="color: red"> *</span></label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required value="{{ old('judul') }}">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p for="tanggal_kejadian">Tanggal Kejadian<span style="color: red"> *</span></p></p>
                        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" required value="{{ old('tanggal_kejadian') }}" style="margin-top:-25px;height: 25px;margin-bottom:-15px;"> 
                    </div>
                    <div class="form-group">
                        <p for="keterangan">Keterangan<span style="color: red"> *</span></p></p>
                        <textarea id="keterangan" name="keterangan" rows="4" required value="{{ old('keterangan') }}" style="margin-top:-25px;"></textarea>
                    </div>

                    <b>Identitas Terlapor</b>
                    <div class="mb-3">
                        <label for="nama"  class="form-label">Nama<span style="color: red"> *</span></label>
                        <input type="text" class="form-control @error('nama_terlapor') is-invalid @enderror" id="nama_terlapor" name="nama_terlapor" required value="{{ old('nama_terlapor') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan<span style="color: red"> *</span></label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan_terlapor" required value="{{ old('jabatan') }}">
                    </div>
                    <div class="mb-3">
                        <label for="instansi" class="form-label">Instansi<span style="color: red"> *</span></label>
                        <input type="text" class="form-control @error('instansi') is-invalid @enderror" id="instansi" name="instansi_terlapor" required value="{{ old('tanggal_kejadian') }}">
                    </div>
            </div>
            <div class="col-md-6"style="padding-left:40px;padding-right:60px;padding-top:10px;margin-top: 8px; padding-bottom:20px;">
                <strong>Identitas Pelapor</strong>
                    <div class="mb-3">
                        <label for="nama_pelapor" class="form-label">Nama (Alias)<span style="color: red"> *</span></label>
                        <input type="text" class="form-control @error('nama_pelapor') is-invalid @enderror" id="nama_pelapor" name="nama_pelapor" required value="{{ old('nama_pelapor') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas">
                    </div>
                    <div class="mb-3">
                        <label for="nomorhandphone" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="instansi2" class="form-label">Instansi/Lembaga/Perusahaan</label>
                        <input type="text" class="form-control" id="instansi2" name="instansi2">
                    </div>
                    <b>Upload Bukti</b><span style="color: red"> *</span>
                    <div class="form-group" style="padding-top:2%;">
                        <ul id="daftarBukti" style="list-style-type: decimal;"></ul>
                        {{-- <textarea class="form-control" id="tambahfile" name="tambahfile" rows="5" disabled> --}}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="judulfile" class="form-label">Judul File<span style="color: red"> *</span></label>
                        <input type="text" class="form-control" id="judulfile" name="judulfile">
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="form-label">Gambar<span style="color: red"> *</span></label>
                        <input type="file" id="gambar" name="gambar" style="height: auto;margin-bottom:-15px;font-size:14px;">
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <button type="button" class="btn btn-danger px-3" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); color: rgb(255, 255, 255); background-color: #FF2E00;" id="btnTambahBukti">Tambah Bukti</button>
                            <button type="submit" class="btn btn-danger px-3" style="margin-top:10px;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);color: rgb(255, 255, 255); background-color: #FF2E00;">Ajukan Pengaduan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>

<script>
    document.getElementById('btnTambahBukti').addEventListener('click', function () {
        var judulfile = document.getElementById('judulfile').value;
        var gambar = document.getElementById('gambar').value;
        var daftarBukti = document.getElementById('daftarBukti');

        if (judulfile && gambar) {
            // Buat elemen list item untuk bukti yang diunggah
            var buktiItem = document.createElement('li');
            
            buktiItem.innerHTML = 'Judul File: ' + judulfile + 'Nama File: ' + gambar.replace("C:\\fakepath\\", "");

            // Tambahkan elemen list item ke daftar bukti
            daftarBukti.appendChild(buktiItem);

        } else {
            alert('Harap isi Judul File dan unggah gambar terlebih dahulu.');
        }
    });
</script>

@endsection