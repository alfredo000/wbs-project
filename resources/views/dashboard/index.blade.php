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
</style>
<div class="card">
    <div class="card" style="position: relative; margin-top: -25px;">
        <img src="img/kualanamu2.png" class="card-img-top" alt="#" style="background:rgba(0, 0, 0, 0.5);">
        <h2 class="position-absolute p-" style="color: white; top: 24%; left: 5%;">
            <b>Profil {{ auth()->user()->name }}</b>
        </h2>
    </div>
    <div>
        <button type="button" class="btn btn-danger px-3" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.7);color: rgb(255, 255, 255); background-color: #FF2E00; position: absolute; bottom: 20%; left: 5%;">Ajukan Pengaduan</button>
    </div>
</div><br>
<div style="padding-top: 1%;">
    <div class="container px-4 py-2" style="font-size:14px;background-color: white;margin-top:-15px; display:flex; align-items:center;"> 
        <div class="table-responsive">
            <table class="table table-striped table-md">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <td>{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ auth()->user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Whatsapp</th>
                        <td>{{ auth()->user()->nomor_whatsapp }}</td>
                    </tr>
                    <tr>
                        <th>Instansi</th>
                        {{-- <th>{{ auth()->user()->instansi }}</th> --}}
                    </tr>
                    <tr>
                        <th>Terdaftar</th>
                        <td>{{ auth()->user()->created_at }}</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
