@extends('layouts.main')
@section('container')
    <style>
        body {
            background-color: #F5F5F5;
        }
    </style>

    <div class="card" style="position: relative;">
        <div class="card" style="position: relative; margin-top: -25px;">
            <img src="{{ asset('img/kualanamu6.jpg') }}" class="card-img-top" alt="gambarAktivitasSaya" style="height: 260px; width: 100%; filter: brightness(0.4);">
            <h2 class="position-absolute" style="color: white; top: 24%; left: 10%; transform: translate(-30%, -30%);">
                <b>Aktivitas Saya</b>
            </h2>
        </div>
    </div><br>
    <div>
        <div class="position-absolute" style="padding-top: 5px;padding-left:30px;">
            <h6><b>Riwayat Pengaduan</b></h6>
        </div>
        <div style="display:flex; justify-content: flex-end;padding-right:4%">
            <button type="button" class="btn btn-danger px-3" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.7);color: rgb(255, 255, 255); background-color: #FF2E00;" onclick="ajukanPengaduan()">Ajukan Pengaduan</button>
        </div>
    </div>
    <div style="padding-top: 50px">
        @auth
        @php
            $userPengaduans = $pengaduans->where('user_id', Auth::id());
        @endphp
        @if ($userPengaduans->isEmpty())
        <div style="text-align:center;">
            <h6 style="font-size:14px">Anda belum mengajukan pengaduan.</h6>
        </div>
        @else
        <div style="text-align:center; padding-left: 25px; padding-right: 25px;">
        <table class="table table-bordered border-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Jenis Terlapor</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $nomor = 1 // cara mengurutkan nomor sesuai pengajuan masing-masing user
                @endphp
                @foreach ($pengaduans as $item)
                @if ($item->user_id === Auth::id())
                <tr>
                    <td>{{ $nomor }}</td>
                    <td>{{ $item->created_at->format('d F Y') }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->jenis_terlapor }}</td>
                    <td> </td>
                    <td>
                        <a href="{{ route('aktivitassaya.show', $item->id) }}" class="btn btn-primary btn-sm" title="Detail Pengaduan">
                            <i class="bi bi-exclamation-circle"></i> Detail
                        </a>
                    </td>
                </tr>
                @php
                    $nomor++; // Tambahkan 1 ke nomor untuk pengaduan berikutnya
                @endphp
                @endif
                @endforeach
            </tbody>
        </table>
        @endif
        @else
        <div style="text-align:center;">
            <h6 style="font-size:14px">Silahkan <a href="/login">Login</a> untuk melihat Aktivitas Saya</h6>
        </div>
        @endauth
    </div>
    <br><br>
    <br><br>
    <br><br>

    <script>
        function ajukanPengaduan() {
            @auth
                window.location.href = "ajukanpengaduan";
            @else
                alert("Anda harus login terlebih dahulu untuk mengajukan pengaduan.");
            @endauth
        }
    </script>
    
@endsection