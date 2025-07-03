@extends('layout.app') {{-- atau layouts.auth jika kamu punya layout khusus --}}

@section('title', 'Login')

@section('content')
<div class="container-fluid login-container d-flex align-items-center justify-content-center">
  <div class="row w-100">
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
      <div class="glass w-75">
        <h2 class="mb-4 text-white">Login</h2>

        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}" placeholder="Enter email" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
          </div>
          <button type="submit" class="btn btn-green w-100">Login</button>
        </form>

        @if ($errors->any())
        <div class="alert alert-danger mt-3">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

      </div>
    </div>

    <div class="col-lg-6 login-img d-none d-lg-block">
      <img src="{{ asset('/img/login-banner.webp') }}" alt="" srcset="">
    </div>
  </div>
</div>
@endsection
