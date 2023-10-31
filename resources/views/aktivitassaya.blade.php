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
        @if ($pengaduans->isEmpty())
        <div style="text-align:center;">
            <h6 style="font-size:14px">Anda belum mengajukan pengaduan.</h6>
        </div>
        @else
        <div style="text-align:center;">
        <table class="table table-bordered border-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Jenis Terlapor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduans as $index => $item)
                @if ($item->user_id === Auth::id())
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->jenis_terlapor }}</td>
                    <td><a href="{{ route('aktivitassaya.show', $item->id) }}" title="Detail"><i class="bi bi-exclamation-circle"></i></a></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        @endif
        @else
        <div style="text-align:center;">
            <h6 style="font-size:14px">Silahkan <a href="login">Login</a> untuk melihat Aktivitas Saya</h6>
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