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
                <form action="proses.php" method="post" style="flex:1">
                    <div class="form-group">
                        <p for="jenis_terlapor">Jenis Terlapor<span style="color: red"> *</span></p>
                        <select id="jenis_terlapor" name="jenis_terlapor" required style="margin-top:-5px;height: 25px;">
                            <option value="Option 1">Dewan Komisaris</option>
                            <option value="Option 2">Dewan Direksi</option>
                            <option value="Option 3">Selain Dewan Komisaris & Dewan Direksi</option>
                        </select>
                    </div>
                    <script>
                        document.getElementById("jenis_terlapor").addEventListener("change", function() {
                            var selectedValue = this.value;
                        });
                    </script>                     
                    <div class="form-group">
                        <p for="lingkup" name="lingkup" style="margin-top:-15px;">Lingkup <span style="color: red;"> *</span></p>
                        <input type="text" id="lingkup" name="lingkup" required style="margin-top:-10px;height: 25px;margin-bottom:-15px;">
                    </div>
                    <div class="form-group">
                        <p for="judul">Judul<span style="color: red"> *</span></p></p>
                        <input type="text" id="judul" name="judul" required style="margin-top:-25px;height: 25px;margin-bottom:-15px;">
                    </div>
        
                    <div class="form-group">
                        <p for="tanggal_kejadian">Tanggal Kejadian<span style="color: red"> *</span></p></p>
                        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" required style="margin-top:-25px;height: 25px;margin-bottom:-15px;"> 
                    </div>
        
                    <div class="form-group">
                        <p for="keterangan">Keterangan<span style="color: red"> *</span></p></p>
                        <textarea id="keterangan" name="keterangan" rows="4" required style="margin-top:-25px;"></textarea>
                    </div>
                    <div class="form-group">
                        <strong>Identitas Terlapor</strong>
                        <p for="nama">Nama<span style="color: red"> *</span></p></p>
                        <input type="text" id="nama" name="nama" required style="margin-top:-25px;height: 25px;margin-bottom:-15px;">
                    </div>
                    <div class="form-group">
                        <p for="jabatan">Jabatan<span style="color: red"> *</span></p></p>
                        <input type="text" id="jabatan" name="jabatan" required style="margin-top:-25px;height: 25px;margin-bottom:-15px;">
                    </div>
                    <div class="form-group">
                        <p for="instansi">Instansi<span style="color: red"> *</span></p></p>
                        <input type="text" id="instansi" name="instansi" required style="margin-top:-25px;height: 25px;margin-bottom:-15px;">
                    </div>
                </form>
            </div>
            <div class="col-md-6"style="padding-left:40px;padding-right:60px;padding-top:10px;margin-top: 8px; padding-bottom:20px;">
                <strong>Identitas Pelapor</strong>
                <div class="form-group">
                    <p for="nama2">Nama (Alias)<span style="color: red"> *</span></p>
                    <input type="text" id="nama2" name="nama2" required style="margin-top:-10px;height: 25px;margin-bottom:-15px;">
                </div>
                <div class="form-group">
                    <p for="nomoridentitas">Nomor Identitas</p>
                    <input type="text" id="nomoridentitas" name="nomoridentitas" required style="margin-top:-10px;height: 25px;margin-bottom:-15px;">
                </div>
                <div class="form-group">
                    <p for="nomorhandphone">Nomor Handphone</p>
                    <input type="text" id="nomorhandphone" name="nomorhandphone" required style="margin-top:-10px;height: 25px;margin-bottom:-15px;">
                </div>
                <div class="form-group">
                    <p for="email">Email</p>
                    <input type="text" id="email" name="email" required style="margin-top:-10px;height: 25px;margin-bottom:-15px;">
                </div>
                <div class="form-group">
                    <p for="instansi2">Instansi/Lembaga/Perusahaan</p>
                    <input type="text" id="instansi2" name="instansi2" required style="margin-top:-10px;height: 25px;margin-bottom:-15px;">
                </div>
                <strong>Upload Bukti</strong><span style="color: red"> *</span>
                <div class="form-group">
                    <input type="text" id="tambahfile" name="tambahfile" required style="margin-top:5px;height: 25px;margin-bottom:-15px;" disabled>
                </div>
                <div class="form-group">
                    <p for="judulfile">Judul File</p>
                    <input type="text" id="judulfile" name="judulfile" required style="margin-top:-15px;height: 25px;margin-bottom:-15px;">
                </div>
                <div class="form-group">
                    <input type="file" id="gambar" name="gambar" required style="height: auto;margin-bottom:-15px;font-size:14px;">
                </div>
                <div class="row">
                    <div class="form-group">
                        <button type="button" class="btn btn-danger px-3" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5); color: rgb(255, 255, 255); background-color: #FF2E00;">Tambah Bukti</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger px-3" style="margin-top:-10px;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);color: rgb(255, 255, 255); background-color: #FF2E00;">Ajukan Pengaduan</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection