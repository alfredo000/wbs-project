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
        <button type="button" class="btn btn-danger px-3" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.7);color: 
        rgb(255, 255, 255); background-color: #FF2E00;" onclick="ajukanpengaduan()">Ajukan Pengaduan</button>
    </div>
</div>
<div style="padding-top: 50px">
    @auth
    @if (isset($aktivitassaya))
        @if ($aktivitassaya->isEmpty())
        {{-- @if (isset($aktivitassaya) && $aktivitassaya->isNotEmpty()) --}}
        <div style="text-align:center;">
                <h6 style="font-size:14px">Anda belum mengajukan pengaduan.</h6>
            </div>
        @else
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Judul</th>
                <th scope="col">Jenis Terlapor</th>
                {{-- <th scope="col">Status</th> --}}
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($aktivitassaya as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->jenis_terlapor }}</td>
                    {{-- <td>{{ $item->status }}</td> --}}
                    <td> </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        @endif
    
        <div style="text-align:center;">
            <h6 style="font-size:14px">Silahkan <a href="login">Login</a> untuk melihat Aktivitas Saya.</h6>
        </div>
    @endif
    @endauth
</div>
<br><br>
<br><br>
<br><br>

<script>
    function ajukanpengaduan() {
        @auth
            window.location.href = "{{ route('ajukanpengaduan.create') }}";
        @else
            alert("Anda harus login terlebih dahulu untuk mengajukan pengaduan.");
        @endauth
    }
</script>
@endsection