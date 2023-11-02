@extends('layouts/main')
@section('container')
<style>
    body {
        background-color: #F5F5F5;
    }
</style>
<div class="card">
    <div class="card" style="position: relative; margin-top: -25px;">
        <img src="img/kualanamu2.png" class="card-img-top" alt="#" style="background:rgba(0, 0, 0, 0.5);">
        <h2 class="position-absolute p-" style="color: white; top: 24%; left: 10%; transform: translate(-30%, -30%);">
            <b>Alur Pengaduan</b>
        </h2>
    </div>
    
</div><br>
<div class="container-fluid p-0" style="background-color: white;margin-top:-15px; display: flex; align-items: center;">
    <div class="row">
        <div class="col-5">
            <div class="col px-5 py-4">
                    <h4 style="color:#2C89BE"><b style="padding-left:10px;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); white-space:nowrap">Alur Pengaduan</b></h4>
                </div>
        </div>
    </div>
    <div class="col" style="text-align:justify; padding-top:30px; padding-right:30px;padding-left:80px">
        <p style="font-size:14px">Jika Anda melihat atau mengetahui dugaan Tindak Pidana Korupsi atau bentuk pelanggaran lainnya yang dilakukan pegawai PT. Angkasa Pura Aviasi, silahkan melapor ke Aviasi Whistleblowing System PT. Angkasa Pura Aviasi. Jika laporan anda memenuhi syarat/kriteria, maka laporan Anda akan diproses lebih lanjut.
            Berikut ini adalah tatacara dalam membuat pengaduan melalui Aviasi Whistleblowing System.
        </p><br>
    </div>
</div><br>
<div class="card container" style="align-items: justify;">
    <div class="row"style="padding-left:60px;padding-right:60px;padding-top:10px;margin-top: 8px; padding-bottom:20px;">
        <div class="col-sm-5">
          <div class="card" style="background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
              <h6 class="card-title" style="color: #2C89BE;text-align: center">
                <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">Periksa Laporan Anda</b>
              </h6>
              <div class="row" style="padding-top:5px">
                <div class="col-md-2 text-right" style="d-flex align-items-center justify-content-center">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M24.879 9.879A3 3 0 0 1 30 12v24a3 3 0 0 1-6 0V19.236a3 3 0 0 1-4.121-4.357l5-5Zm2.504 1.197a1 1 0 0 0-1.09.217l-5 5a1 1 0 0 0 1.414 1.414l1.586-1.586a1 1 0 0 1 1.707.707V36a1 1 0 1 0 2 0V12a1 1 0 0 0-.617-.924Z" clip-rule="evenodd"/></svg></i>
                </div>
                <div class="col-md-10">
                    <p class="card-text" style="font-size: 14px;text-align:justify;padding-right:10%">
                        Sebelum melaporkan pengaduan Anda di Aviasi Whistleblowing System, terlebih dahulu periksa kelengkapan pengaduan Anda apakah telah sesuai dengan kriteria pengaduan yang telah ditetapkan.                    </p>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
            <div class="card-body text-center d-flex align-items-center justify-content-center" style="height: 100%;">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><g transform="rotate(90 128 128)"><g fill="currentColor"><path d="M224 120h-48v88a8 8 0 0 1-8 8H88a8 8 0 0 1-8-8v-88H32l96-96Z" opacity=".2"/><path d="m229.66 114.34l-96-96a8 8 0 0 0-11.32 0l-96 96A8 8 0 0 0 32 128h40v80a16 16 0 0 0 16 16h80a16 16 0 0 0 16-16v-80h40a8 8 0 0 0 5.66-13.66ZM176 112a8 8 0 0 0-8 8v88H88v-88a8 8 0 0 0-8-8H51.31L128 35.31L204.69 112Z"/></g></g></svg></i>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="card" style="background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
              <div class="card-body">
                <h6 class="card-title" style="color: #2C89BE;text-align: center">
                  <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">Registrasi Login</b>
                </h6>
                <div class="row" style="padding-top:5px">
                  <div class="col-md-2 text-right" style="d-flex align-items-center justify-content-center">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M35 18a9 9 0 0 0-9-9h-4a9.003 9.003 0 0 0-8.487 6a3 3 0 1 0 5.657 2A3.003 3.003 0 0 1 22 15h4a3 3 0 0 1 2 5.237a2.953 2.953 0 0 0-.085.078l-14 13.528A3 3 0 0 0 16 39h16a3 3 0 1 0 0-6h-8.578l8.626-8.335A8.985 8.985 0 0 0 35 18Zm-9-7a7 7 0 0 1 4.67 12.216L20.252 33.281A1 1 0 0 0 20.948 35H32a1 1 0 1 1 0 2H16a1 1 0 0 1-.695-1.72l14-13.527l-.695-.719l.695.72A4.985 4.985 0 0 0 31 18a5 5 0 0 0-5-5.001h-4a5.002 5.002 0 0 0-4.716 3.333a1 1 0 1 1-1.885-.666A7.002 7.002 0 0 1 22 11h4Z" clip-rule="evenodd"/></svg></i>
                </div>
                  <div class="col-md-10">
                    <p class="card-text" style="font-size: 14px;text-align:justify;padding-right:10%">
                        Lakukan Log-in jika Anda sudah memiliki akun di Aviasi Whistleblowing System dengan menekan tombol "Login" atau silahkan registrasi/daftar akun Anda dengan menekan tombol "Registrasi".
                    </p>
                  </div>
              </div>
              </div>
            </div>
          </div>
    </div>
    <div class="row"style="padding-left:60px;padding-right:60px;padding-top:10px;margin-top: 8px; padding-bottom:20px;">
        <div class="col-sm-5">
          <div class="card" style="background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
              <h6 class="card-title" style="color: #2C89BE;text-align: center">
                <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">Isi Formulir Pengaduan</b>
              </h6>
              <div class="row" style="padding-top:5px">
                <div class="col-md-2 text-right" style="d-flex align-items-center justify-content-center">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M35 18c0-5.033-4.15-9-9.13-9h-4.088c-3.94 0-7.335 2.468-8.604 5.981a3 3 0 1 0 5.644 2.038c.414-1.147 1.56-2.019 2.96-2.019h4.087C27.657 15 29 16.4 29 18s-1.343 3-3.13 3h-4.088a3 3 0 1 0 0 6h4.087C27.657 27 29 28.4 29 30s-1.343 3-3.13 3h-4.088c-1.4 0-2.546-.871-2.96-2.019a3 3 0 1 0-5.644 2.038C14.448 36.532 17.842 39 21.782 39h4.087C30.85 39 35 35.033 35 30a8.881 8.881 0 0 0-2.324-6A8.881 8.881 0 0 0 35 18Zm-9.13-7c3.918 0 7.13 3.115 7.13 7a6.91 6.91 0 0 1-2.408 5.244a1 1 0 0 0 0 1.512A6.91 6.91 0 0 1 33 30c0 3.885-3.212 7-7.13 7h-4.088c-3.093 0-5.738-1.936-6.723-4.66a1 1 0 1 1 1.882-.68c.699 1.937 2.595 3.34 4.841 3.34h4.087C28.726 35 31 32.738 31 30s-2.274-5-5.13-5h-4.088a1 1 0 1 1 0-2h4.087C28.726 23 31 20.738 31 18s-2.274-5-5.13-5h-4.088c-2.246 0-4.142 1.403-4.841 3.34a1 1 0 1 1-1.881-.68c.984-2.724 3.63-4.66 6.722-4.66h4.087Z" clip-rule="evenodd"/></svg></i>
                </div>
                <div class="col-md-10">
                    <p class="card-text" style="font-size: 14px;text-align:justify;padding-right:10%">
                        Klik menu "Tulis-Pengaduan" yang terdapat di bagian navigasi dan lanjutkan dengan mengisi formulir pengaduan yang telah disediakan dan lanjutkan dengan menekan tombol "Kirim Pengaduan".
                    </p>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
            <div class="card-body text-center d-flex align-items-center justify-content-center" style="height: 100%;">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><g transform="rotate(90 128 128)"><g fill="currentColor"><path d="M224 120h-48v88a8 8 0 0 1-8 8H88a8 8 0 0 1-8-8v-88H32l96-96Z" opacity=".2"/><path d="m229.66 114.34l-96-96a8 8 0 0 0-11.32 0l-96 96A8 8 0 0 0 32 128h40v80a16 16 0 0 0 16 16h80a16 16 0 0 0 16-16v-80h40a8 8 0 0 0 5.66-13.66ZM176 112a8 8 0 0 0-8 8v88H88v-88a8 8 0 0 0-8-8H51.31L128 35.31L204.69 112Z"/></g></g></svg></i>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="card" style="background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
              <div class="card-body">
                <h6 class="card-title" style="color: #2C89BE;text-align: center">
                  <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">Pantau Pengaduan</b>
                </h6>
                <div class="row" style="padding-top:5px">
                  <div class="col-md-2 text-right" style="d-flex align-items-center justify-content-center">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M25.504 10.336A3 3 0 0 1 31 12v15h1a3 3 0 1 1 0 6h-1v3a3 3 0 1 1-6 0v-3h-9a3 3 0 0 1-2.645-1.584l.875-.469l-.875.469a3 3 0 0 1 .149-3.08l12-18Zm2.786.707a1 1 0 0 0-1.122.402l-12 18A1 1 0 0 0 16 31h10a1 1 0 0 1 1 1v4a1 1 0 1 0 2 0v-4a1 1 0 0 1 1-1h2a1 1 0 0 0 0-2h-2a1 1 0 0 1-1-1V12a1 1 0 0 0-.71-.957Zm-2 6.606a1 1 0 0 1 .71.957V28a1 1 0 0 1-1 1h-6.263a1 1 0 0 1-.832-1.554l6.263-9.395a1 1 0 0 1 1.122-.402ZM21.606 27H25v-5.09L21.606 27Z" clip-rule="evenodd"/></svg></i>
                </div>
                  <div class="col-md-10">
                    <p class="card-text" style="font-size: 14px;text-align:justify;padding-right:10%">
                        Anda dapat memantau pengaduan yang pernah dikirim, membuat pengaduan baru dan juga dapat melakukan komunikasi secara pribadi dengan administrator Aviasi Whistleblowing System melalui halaman khusus pelapor.
                    </p>
                  </div>
              </div>
              </div>
            </div>
          </div>
    </div>
    
</div>

@endsection