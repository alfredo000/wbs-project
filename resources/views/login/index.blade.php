@php
    $hideFooter = true; // Atur ini untuk menyembunyikan footer
    
@endphp
@extends('layouts.main')
@section('container')
<meta charset="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
      background: linear-gradient(135deg, #84D3FF,#48A1F4);
  }
</style>
<div class="row justify-content-center">
    <div class="col-md-4">

      @if(session()->has('success'))      
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3">Don't Have an Account? <a href="/register">Sign In</a></small>
          </main>
    </div>
</div>

@endsection