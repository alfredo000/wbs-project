@php
    $hideFooter = true; // Atur ini untuk menyembunyikan footer
    
@endphp
@extends('layouts.main')
@section('container')
<meta charset="viewport" content="width=device-width, initial-scale=1">

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

      <div class="col-md" style="align-items:right">
        <main class="form-signin">
          <h5 style="text-align:center;text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);color:#0B49C0;">LOGIN</h5> 
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
              <div class="form-floating" style="margin-top:10px;">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit" style="margin-top: 10px">Login</button>
            </form>

            <small class="d-block text-center mt-3">Don't Have an Account? <a href="/register">Sign Up</a></small>
          </main>
      </div>
        
    </div>
</div>

@endsection