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
            <b>Tentang WBS</b>
        </h2>
    </div>
</div><br>
<div class="container-fluid p-0" style="background-color: white;margin-top:-15px; display: flex; align-items: center;">
    <div class="row">
        <div class="col-5">
            <div class="col px-5 py-4">
                    <h4 style="color:#2C89BE"><b style="padding-left:10px;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); white-space:nowrap">Tentang WBS</b></h4>
                </div>
        </div>
    </div>
    <div class="col" style="text-align:justify; padding-top:30px; padding-right:30px;padding-left:80px">
        <p style="font-size:14px">Whistleblowing System merupakan mekanisme penyampaian pengaduan dugaan tindak pidana tertentu yang telah terjadi atau akan 
            terjadi yang melibatkan pegawai dan orang lain yang dilakukan dalam organisasi tempatnya bekerja, dimana pelapor bukan merupakan
            bagian dari pelaku kejahatan yang dilaporkannya.
        </p><br>
    </div>
</div><br>
<div class="container px-4 py-2" style="font-size:14px;background-color: white;margin-top:-15px; display:flex; align-items:center;"> 
    <div class="row">
        <div class="col" style="padding-right: 50%;text-align:justify;padding-top:30px;padding-left:0px;">
            <p style="padding-left: 50px;">Jika Anda melihat atau mengetahui dugaan tindak pidana korupsi atau bentuk pelanggaran lainnya yang dilakukan pegawai
                PT. Angkasa Pura Aviasi, silahkan melaporkannya melalui Whistleblowing System. Jika laporan Anda memenuhi syarat/kriteria,
                maka laporan Anda akan diproses lebih lanjut.
            </p>
        </div>
        <div class="col-5">
            <div style="position: absolute; padding-left:65%; transform: translate(-0.000000%, -300%);">
                <h4 style="color:#2C89BE;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);"><b>Kriteria Pengaduan</b></h4>
            </div>
        </div>
        <div class="col" style="padding-right: 50%;text-align:justify;padding-left:0px;">
            <p style="padding-left: 50px;">Jika Anda melihat atau mengetahui dugaan tindak pidana korupsi atau bentuk pelanggaran lainnya yang dilakukan pegawai
                PT. Angkasa Pura Aviasi, silahkan melaporkannya melalui Whistleblowing System. Jika laporan Anda memenuhi syarat/kriteria,
                maka laporan Anda akan diproses lebih lanjut.
            </p><br>
        </div>
        <div class="col" style="padding-right: 50%;padding-left:0px;width:100%">
            <p style="padding-left: 50px;padding-top:5px;white-space:nowrap">
                Jika laporan anda memenuhi syarat/kriteria, maka laporan Anda akan diproses lebih lanjut. Berikut ini syarat/kriteria yang harus dipenuhi:
            </p>
            <hr style="margin-left:50px; width:250px;border-top: 2px solid rgba(80, 80, 80, 0.3); margin-top: 5px;">
        </div>
        <div class="row" style="padding-left:40px">
            <div class="col-sm-3">
                <div>
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M24.879 9.879A3 3 0 0 1 30 12v24a3 3 0 0 1-6 0V19.236a3 3 0 0 1-4.121-4.357l5-5Zm2.504 1.197a1 1 0 0 0-1.09.217l-5 5a1 1 0 0 0 1.414 1.414l1.586-1.586a1 1 0 0 1 1.707.707V36a1 1 0 1 0 2 0V12a1 1 0 0 0-.617-.924Z" clip-rule="evenodd"/></svg></i>
                </div>
            </div>
        </div>
    </div>
</div><br>

@endsection