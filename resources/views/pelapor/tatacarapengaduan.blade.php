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
            <b>Tata Cara Pengaduan</b>
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
        <p style="font-size:14px">Whistleblower atau yang disebut sebagai pelapor pengaduan adalah semua orang yang boleh melaporkan.
        </p><br>
    </div>
</div><br>
<div class="card container" style="border-radius:20px;align-items: justify;">
    <div class="row"style="padding-left:60px;padding-right:60px;padding-top:10px;margin-top: 8px; padding-bottom:20px;">
        <p style="font-size: 14px">Berikut ini adalah langkah-langkah yang dilakukan untuk membuat pengaduan melalui aplikasi AWS (Aviasi Whistleblowing System), yaitu:</p>
        <div class="card" style="background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body" style="font-size: 14px;text-align:justify;">
                <p>
                    Sebelum melaporkan pengaduan Anda di Whistleblowing System, terlebih dahulu periksa kelengkapan pengaduan Anda apakah telah sesuai dengan kriteria pengaduan yang telah ditetapkan yaitu mengandung unsur 4W+1H (What, Who, Where, When dan How). Lebih jelas tentang kriteria pengaduan dapat dilihat di tautan berikut ini: Kriteria Pengaduan.
                </p>
                <p>
                    Jika pengaduan tersebut telah memenuhi kriteria yang telah ditentukan, tahap berikutnya adalah mengisi formulir pengaduan dengan menekan tombol KIRIM-PENGADUAN yang terdapat pada menu navigasi sebelah kanan atas halaman. Silahkan mengisi semua data yang diminta secara lengkap dan benar dan lanjutkan dengan menekan tombol "Kirim-Pengaduan" yang muncul setelah mencentang konfirmasi validasi data pengaduan.                     
                </p>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md" style="text-align: left;padding-left:20%;padding-right:5%">
                <hr style="width: 50%; display: inline-block; margin-top: -5px; border-top: 2px solid rgba(80, 80, 80, 0.3);">
            </div>
            <div class="col-md" style="text-align: left;padding-right:20%;padding-right:5%">
                <hr style="width: 50%; display: inline-block; margin-top: -5px; border-top: 2px solid rgba(80, 80, 80, 0.3);">
            </div>
        </div>
    
    <div class="row"style="text-align:justify;padding-left:50px;padding-right:50px; margin-bottom:20px;">
        <div class="col-md-6" style="display: flex">
            <div class="card" style="background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);flex:1">
              <div class="card-body">
                <p class="card-text" style="margin-right: 20px;margin-left: 20px;font-size:14px">
                    Setelah mengirim pengaduan, secara otomatis anda telah membuat akun di aplikasi AWS (Aviasi Whistleblowing System). Akun anda dapat digunakan untuk masuk ke halaman khusus pelapor sehingga dapat memantau tahapan proses pengaduan. (Jaga kerahasiaan akun Anda agar tidak disalahgunakan oleh orang yang tidak bertanggung jawab). 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6" style="display: flex">
            <div class="card" style="background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);flex:1">
              <div class="card-body">
                <p class="card-text" style="margin-right: 20px;margin-left: 20px;font-size:14px">
                    Anda dapat memantau pengaduan yang pernah dikirim, membuat pengaduan baru dan juga dapat melakukan komunikasi secara pribadi dengan administrator AWS melalui halaman khusus pelapor. "Komunikasi secara pribadi dengan administrator AWS" melalui halaman khusus pelapor menjamin data pribadi Anda tidak akan diketahui dan dijaga kerahasiaannya. Kami dapat meminta data pribadi yang berhubungan dengan Anda secara langsung jika perlu tindak lanjut dari pengaduan Anda tersebut.
                </p>
              </div>
            </div>
          </div>
    </div>
</div>
<div style="padding-top:1%;padding-left:3%;padding-right:3%">
    <div class="card container" style="background-color: #FFEAEA;">
        <div>
            <p style="text-align:center;font-size:14px;padding-left:30px;padding-right:30px;padding-top:10px">
                Sebagai bentuk terimakasih kami terhadap laporan yang Anda kirim, kami berkomitmen untuk merespon laporan Anda secepatnya sejak laporan Anda dikirim. 
            </p>
        </div>
    </div>
</div>
@endsection