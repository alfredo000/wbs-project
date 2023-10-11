@extends('layouts.main')
@section('container')

<meta charset="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: #F5F5F5;
            margin: 0;
            padding: 0;
        }
    </style>
    <div class="card">
        <div class="card" style="position: relative; margin-top: -25px;">
            <img src="img/kualanamu2.png" class="card-img-top" alt="#" style="background:rgba(0, 0, 0, 0.5);">
        <div class="position-absolute p-5" style="color: white; top: 13%; left: 7.5%; transform: translate(-30%, -30%);">
            <h5>Selamat Datang di</h5>
        </div>
            <h2 class="position-absolute p-5" style="color: white; top: 27%; left: 14%; transform: translate(-30%, -30%);">
                <b>Aviasi Whistleblowing System</b>
            </h2>
            <div class="col-6 px-5" style="position: absolute; bottom: 8%; left: 1%; color: white;font-size:14px;">
                Mari bersama-sama menciptakan Instansi yang jujur dan bersih. Laporkan setiap pelanggaran yang terjadi di lingkungan kerja.
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-danger px-3" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.7);color: rgb(255, 255, 255); background-color: #FF2E00; position: absolute; bottom: 8%; right: 1.5%;">Ajukan Pengaduan</button>
        </div>
    </div><br>

    <div class="container-fluid p-0" style="background-color: white;margin-top:-15px; display: flex; align-items: center;">
        <div class="row">
            <div class="col-5">
                <div class="col px-5 py-4">
                        <h5 style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);margin-bottom:2px;color:#2C89BE; white-space:nowrap;">Apa itu</h5> 
                        <h4 style="color:#2C89BE"><b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); white-space:nowrap">WHISTLEBLOWING SYSTEM?</b></h4>
                    </div>
            </div>
        </div>
        <div class="col" style="text-align:justify; padding-top:30px; padding-right:30px;">
            <p style="font-size:14px;">Whistleblowing System merupakan mekanisme penyampaian pengaduan dugaan tindak pidana tertentu yang telah terjadi atau akan 
                terjadi yang melibatkan pegawai dan orang lain yang dilakukan dalam organisasi tempatnya bekerja, dimana pelapor bukan merupakan
                bagian dari pelaku kejahatan yang dilaporkannya.
            </p><br>
        </div>
    </div><br>
    <div class="container-fluid" style="background-color: white;margin-top:-15px; display:flex; align-items:center;">
        <div class="row">
            <div class="col" style="padding-right: 50%;text-align:justify;padding-top:30px;padding-left:0px;">
                <p style="font-size:14px;padding-left: 50px;padding-top:5px">Jika Anda melihat atau mengetahui dugaan tindak pidana korupsi atau bentuk pelanggaran lainnya yang dilakukan pegawai
                    PT. Angkasa Pura Aviasi, silahkan melaporkannya melalui Whistleblowing System. Jika laporan Anda memenuhi syarat/kriteria,
                    maka laporan Anda akan diproses lebih lanjut.
                </p><br>
            </div>
            <div class="col-5">
                <div style="position: absolute; padding-left:65%; transform: translate(-0.000000%, -300%);">
                    <h4 style="color:#2C89BE;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);"><b>Kriteria Pengaduan</b></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row"style="padding-left:60px;padding-right:60px;padding-top:10px;margin-top: 8px; margin-bottom:8px;">
        <div class="col-sm-4" style="display: flex">
          <div class="card" style="flex:1;color:#2C89BE;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
              <h5 class="card-title" style="color: #2C89BE">
                <i><svg xmlns="http://www.w3.org/2000/svg" style="margin-left:10px" width="40" height="40" viewBox="0 0 256 256"><path fill="currentColor" d="M140 180a12 12 0 1 1-12-12a12 12 0 0 1 12 12ZM128 72c-22.06 0-40 16.15-40 36v4a8 8 0 0 0 16 0v-4c0-11 10.77-20 24-20s24 9 24 20s-10.77 20-24 20a8 8 0 0 0-8 8v8a8 8 0 0 0 16 0v-.72c18.24-3.35 32-17.9 32-35.28c0-19.85-17.94-36-40-36Zm104 56A104 104 0 1 1 128 24a104.11 104.11 0 0 1 104 104Zm-16 0a88 88 0 1 0-88 88a88.1 88.1 0 0 0 88-88Z"/></svg></i>
              <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px">Apa?</b></h5>
              <p class="card-text" style="margin-left: 20px;font-size:14px">
                Apa perbuatan berindikasi tindak pidana
                korupsi/pelanggaran yang diketahui.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4" style="display: flex">
            <div class="card" style="flex:1;color:#2C89BE;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
              <div class="card-body" style="height:auto">
                <h5 class="card-title" style="color: #2C89BE">
                    <i style="padding-left: 15px"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 512 512"><path fill="currentColor" d="M271.514 95.5h-32v178.111l115.613 54.948l13.737-28.902l-97.35-46.268V95.5z"/><path fill="currentColor" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240s240-107.452 240-240S388.548 16 256 16Zm0 448c-114.875 0-208-93.125-208-208S141.125 48 256 48s208 93.125 208 208s-93.125 208-208 208Z"/></svg></i>
                    <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px">Kapan?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></h5>
                <p class="card-text" style="font-size:14px;margin-left: 20px">
                    Kapan waktu perbuatan tersebut dilakukan.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4" style="display: flex">
            <div class="card" style="flex:1;color:#2C89BE;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
              <div class="card-body">
                <h5 class="card-title" style="color: #2C89BE">
                    <i style="padding-left: 15px"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><path fill="currentColor" d="m462.541 316.3l-64.344-42.1l24.774-45.418A79.124 79.124 0 0 0 432.093 192v-72a103.941 103.941 0 0 0-174.609-76.477L279.232 67a71.989 71.989 0 0 1 120.861 53v72a46.809 46.809 0 0 1-5.215 21.452L355.962 284.8l89.058 58.274a42.16 42.16 0 0 1 19.073 35.421V432h-72v32h104v-85.506a74.061 74.061 0 0 0-33.552-62.194Z"/><path fill="currentColor" d="m318.541 348.3l-64.343-42.1l24.773-45.418A79.124 79.124 0 0 0 288.093 224v-72A104.212 104.212 0 0 0 184.04 47.866C126.723 47.866 80.093 94.581 80.093 152v72a78 78 0 0 0 9.015 36.775l24.908 45.664L50.047 348.3A74.022 74.022 0 0 0 16.5 410.4L16 496h336.093v-85.506a74.061 74.061 0 0 0-33.552-62.194Zm1.552 115.7H48.186l.31-53.506a42.158 42.158 0 0 1 19.073-35.421l88.682-58.029l-39.051-71.592A46.838 46.838 0 0 1 112.093 224v-72a72 72 0 1 1 144 0v72a46.809 46.809 0 0 1-5.215 21.452L211.962 316.8l89.058 58.274a42.16 42.16 0 0 1 19.073 35.421Z"/></svg></i>
                    <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px">Siapa?</b></h5>
                <p class="card-text" style="font-size:14px;margin-left: 20px">
                    Siapa yang bertanggung jawab/terlibat dan 
                    terkait dalam perbuatan tersebut.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row"style="padding-left:60px;padding-right:60px;padding-top:10px;margin-top: 8px; margin-bottom:20px;">
            <div class="col-sm-4" style="display: flex">
              <div class="card" style="flex:1;color:#2C89BE;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                  <h5 class="card-title" style="color: #2C89BE">
                    <i style="padding-left:15px"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M26 21v-1a1 1 0 0 1 2 0v10h2V20a3.003 3.003 0 0 0-3-3a2.964 2.964 0 0 0-1.47.401a2.954 2.954 0 0 0-4-1A2.993 2.993 0 0 0 19 15a2.96 2.96 0 0 0-1 .185V10a3 3 0 0 0-6 0v11.105l-2.235-1.53v.001a2.999 2.999 0 0 0-3.882 4.55L12.323 30l1.347-1.478l-6.378-5.818A.99.99 0 0 1 7 22a1 1 0 0 1 1.6-.8l5.4 3.695V10a1 1 0 0 1 2 0v11h2v-3a1 1 0 0 1 2 0v3h2v-2a1 1 0 0 1 2 0v2Z"/><path fill="currentColor" d="M28 12h-6v-2h6V4H4v6h4v2H4a2.002 2.002 0 0 1-2-2V4a2.002 2.002 0 0 1 2-2h24a2.002 2.002 0 0 1 2 2v6a2.002 2.002 0 0 1-2 2Z"/></svg></i>
                    <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px">Bagaimana?</b></h5>
                  <p class="card-text" style="font-size:14px;margin-left: 20px">
                    Apa perbuatan berindikasi tindak pidana
                    korupsi/pelanggaran yang diketahui.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4"style="display: flex">
                <div class="card" style="flex:1;color:#2C89BE;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                  <div class="card-body" style="height:auto">
                    <h5 class="card-title" stye="color: #2C89BE">
                        <i style="padding-left: 15px"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 16 16"><path fill="currentColor" d="M9.5 7a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0ZM14 7c0 2.874-3.097 6.016-4.841 7.558a1.74 1.74 0 0 1-2.318 0C5.097 13.016 2 9.874 2 7a6 6 0 1 1 12 0Zm-1 0A5 5 0 0 0 3 7c0 1.108.615 2.395 1.57 3.683c.934 1.258 2.087 2.377 2.933 3.126a.74.74 0 0 0 .994 0c.846-.749 2-1.867 2.933-3.126C12.385 9.395 13 8.108 13 7Z"/></svg></i>
                        <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px">Dimana?</b></h5>
                    <p class="card-text" style="font-size:14px;margin-left: 20px">
                        Kapan waktu perbuatan tersebut dilakukan.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4"style="display: flex">
                <div class="card" style="flex:1;color:#2C89BE;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                  <div class="card-body">
                    <h5 class="card-title" style="color: #2C89BE">
                        <i style="padding-left: 15px"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20"><path fill="currentColor" d="M4.943 3a.5.5 0 0 1 .464.333l1.774 5a.5.5 0 0 1-.942.334L5.98 7.94V8H3.73l-.264.68a.5.5 0 1 1-.932-.36l1.935-5A.5.5 0 0 1 4.943 3Zm-.028 1.938L4.117 7h1.53l-.732-2.062Zm12.493-.409c-.246-.686-.604-1.106-1.053-1.328C15.945 3 15.522 3 15.246 3h-.027c-.554 0-.994.19-1.327.487c-.322.288-.521.656-.646.99a4.062 4.062 0 0 0-.245 1.288v.026L13 5.799v.026c0 .383 0 1.085.25 1.724c.13.335.334.67.656.936c.325.268.742.445 1.257.503c.417.046 1.663.013 2.23-1.246a.5.5 0 1 0-.911-.41c-.293.648-.93.693-1.208.662c-.344-.039-.571-.149-.73-.28a1.264 1.264 0 0 1-.363-.529c-.176-.45-.181-.981-.181-1.382V5.79l.003-.059a3.27 3.27 0 0 1 .18-.905c.09-.241.214-.45.375-.593c.15-.135.355-.233.66-.233c.304 0 .51.008.694.098c.158.078.371.257.555.769a.5.5 0 1 0 .941-.338Zm-5.935 1.307c.196-.267.32-.622.32-1.077c0-.376-.074-.696-.218-.96a1.44 1.44 0 0 0-.564-.57C10.605 3 10.165 3 10.003 3H8.5a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h1.75c.218 0 .662-.035 1.07-.271c.446-.26.798-.736.798-1.488c0-.383-.084-.71-.246-.977a1.445 1.445 0 0 0-.399-.428ZM10.521 4.1c.07.039.13.093.176.178c.049.089.096.236.096.48c0 .398-.15.544-.275.62a1.016 1.016 0 0 1-.495.122H9V4h1c.158 0 .361.01.52.1ZM9.364 6.5h.822c.187 0 .433.007.628.103c.087.043.154.1.204.18c.05.083.1.221.1.458c0 .384-.152.537-.301.623A1.203 1.203 0 0 1 10.25 8H9V6.5h.364Zm4.387 4.317a.5.5 0 1 0-.774-.634l-3.741 4.573l-1.882-1.882a.5.5 0 0 0-.708.707l2.273 2.273a.5.5 0 0 0 .74-.037l4.092-5Z"/></svg></i>
                        <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px">Bukti?</b></h5>
                    <p class="card-text" style="font-size:14px;margin-left: 20px">
                        Siapa yang bertanggung jawab/terlibat dan 
                        terkait dalam perbuatan tersebut.</p>
                  </div>
                </div>
              </div>
            </div>
            <div style="padding-bottom:10px">
                <div class="card container" style="background-color: #FFEAEA;">
                    <div>
                        <p style="text-align:center;font-size:12px;padding-left:30px;padding-right:30px;padding-top:10px">
                            Anda tidak perlu khawatir terungkapnya identitas diri Anda karena PT. Angkasa Pura Aviasi akan MERAHASIAKAN & MELINDUNGI identitas Anda sebagai  whistleblower.
                            PT. Angkasa Pura Aviasi sangat menghargai informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda laporkan. Sebagai bentuk terimakasih kami
                            terhadap laporan yang Anda kirim, kami berkomitmen untuk merespon laporan Anda secepatnya sejak laporan Anda dikirim.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="container-fluid p-0">
                    <div class="card" style="text-align:center;padding-left:30px;padding-right:30px;padding-top:10px">
                        <h5 style="color:#2C89BE"><b style="margin-bottom:0px; text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">Tata Cara Pengaduan</b></h5>
                        <p style="text-align:center;font-size:12px;padding-left:30px;padding-right:30px;">Berikut ini adalah tata cata dalam membuat pengaduan melalui Aviasi Whistileblowing System.</p>
                    </div>
                </div>
            </div>
            <div class="row"style="padding-top:10px;padding-left:60px;padding-right:60px; margin-bottom:1px;">
                <div class="col-sm-3" style="display: flex">
                    <div class="card" style="flex:1;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                        <h6 class="card-title">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M24.879 9.879A3 3 0 0 1 30 12v24a3 3 0 0 1-6 0V19.236a3 3 0 0 1-4.121-4.357l5-5Zm2.504 1.197a1 1 0 0 0-1.09.217l-5 5a1 1 0 0 0 1.414 1.414l1.586-1.586a1 1 0 0 1 1.707.707V36a1 1 0 1 0 2 0V12a1 1 0 0 0-.617-.924Z" clip-rule="evenodd"/></svg></i>
                            <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px;font-size:15px">Periksa Laporan Anda?</b>
                        </h6>
                        <p class="card-text" style="margin-left: 4px;text-align:justify;font-size:12px">
                            Sebelum melaporkan pengaduan Anda
                            di Aviasi Whistleblowing System, 
                            terlebih dahulu periksa kelengkapan
                            pengaduan Anda apakah telah sesuai
                            dengan kriteria pengaduan yang telah 
                            ditetapkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"style="display: flex">
                    <div class="card" style="flex:1;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                        <h6 class="card-title">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M35 18a9 9 0 0 0-9-9h-4a9.003 9.003 0 0 0-8.487 6a3 3 0 1 0 5.657 2A3.003 3.003 0 0 1 22 15h4a3 3 0 0 1 2 5.237a2.953 2.953 0 0 0-.085.078l-14 13.528A3 3 0 0 0 16 39h16a3 3 0 1 0 0-6h-8.578l8.626-8.335A8.985 8.985 0 0 0 35 18Zm-9-7a7 7 0 0 1 4.67 12.216L20.252 33.281A1 1 0 0 0 20.948 35H32a1 1 0 1 1 0 2H16a1 1 0 0 1-.695-1.72l14-13.527l-.695-.719l.695.72A4.985 4.985 0 0 0 31 18a5 5 0 0 0-5-5.001h-4a5.002 5.002 0 0 0-4.716 3.333a1 1 0 1 1-1.885-.666A7.002 7.002 0 0 1 22 11h4Z" clip-rule="evenodd"/></svg></i>
                            <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px;font-size:15px">Registrasi Akun?</b>
                        </h6>
                        <p class="card-text" style="margin-left: 4px;text-align:justify;font-size:12px">
                            Lakukan Log-in jika Anda sudah memiliki
                            akun di Aviasi Whistleblowing System
                            dengan menekan fungsi “Login” atau 
                            silahkan registrasi/daftar akun Anda
                            jika belum memiliki akun.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"style="display: flex">
                    <div class="card" style="flex:1;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                        <h6 class="card-title">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M35 18c0-5.033-4.15-9-9.13-9h-4.088c-3.94 0-7.335 2.468-8.604 5.981a3 3 0 1 0 5.644 2.038c.414-1.147 1.56-2.019 2.96-2.019h4.087C27.657 15 29 16.4 29 18s-1.343 3-3.13 3h-4.088a3 3 0 1 0 0 6h4.087C27.657 27 29 28.4 29 30s-1.343 3-3.13 3h-4.088c-1.4 0-2.546-.871-2.96-2.019a3 3 0 1 0-5.644 2.038C14.448 36.532 17.842 39 21.782 39h4.087C30.85 39 35 35.033 35 30a8.881 8.881 0 0 0-2.324-6A8.881 8.881 0 0 0 35 18Zm-9.13-7c3.918 0 7.13 3.115 7.13 7a6.91 6.91 0 0 1-2.408 5.244a1 1 0 0 0 0 1.512A6.91 6.91 0 0 1 33 30c0 3.885-3.212 7-7.13 7h-4.088c-3.093 0-5.738-1.936-6.723-4.66a1 1 0 1 1 1.882-.68c.699 1.937 2.595 3.34 4.841 3.34h4.087C28.726 35 31 32.738 31 30s-2.274-5-5.13-5h-4.088a1 1 0 1 1 0-2h4.087C28.726 23 31 20.738 31 18s-2.274-5-5.13-5h-4.088c-2.246 0-4.142 1.403-4.841 3.34a1 1 0 1 1-1.881-.68c.984-2.724 3.63-4.66 6.722-4.66h4.087Z" clip-rule="evenodd"/></svg></i>
                            <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px;font-size:15px">Isi Formulir Pengaduan</b>
                        </h6>
                        <p class="card-text" style="margin-left: 4px;text-align:justify;font-size:12px">
                            Klik menu “Ajukan Pengaduan” yang 
                            terdapat di Beranda ataupun menu
                            Aktivitas Saya dan lanjutkan dengan
                            mengisi formulir pengaduan yang telah
                            disediakan. Jika sudah selesai, lanjutkan
                            dengan menekan tombol “Ajukan 
                            Pengaduan”.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"style="display: flex">
                    <div class="card" style="flex:1;background-color:#EAFBFF;border:none;box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                        <h6 class="card-title">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M25.504 10.336A3 3 0 0 1 31 12v15h1a3 3 0 1 1 0 6h-1v3a3 3 0 1 1-6 0v-3h-9a3 3 0 0 1-2.645-1.584l.875-.469l-.875.469a3 3 0 0 1 .149-3.08l12-18Zm2.786.707a1 1 0 0 0-1.122.402l-12 18A1 1 0 0 0 16 31h10a1 1 0 0 1 1 1v4a1 1 0 1 0 2 0v-4a1 1 0 0 1 1-1h2a1 1 0 0 0 0-2h-2a1 1 0 0 1-1-1V12a1 1 0 0 0-.71-.957Zm-2 6.606a1 1 0 0 1 .71.957V28a1 1 0 0 1-1 1h-6.263a1 1 0 0 1-.832-1.554l6.263-9.395a1 1 0 0 1 1.122-.402ZM21.606 27H25v-5.09L21.606 27Z" clip-rule="evenodd"/></svg></i>
                            <b style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);padding-left: 10px;font-size:15px">Pantau Pengaduan</b>
                        </h6>
                        <p class="card-text" style="margin-left: 4px;text-align:justify;font-size:12px">
                            Anda  dapat memantau pengaduan 
                            yang pernah Anda kirim, membuat 
                            pengaduan baru dan juga dapat
                            melakukan komunikasi secara pribadi
                            dengan administrator WBS melalui
                            halaman khusus pelapor.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
@endsection
