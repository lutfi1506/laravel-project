@extends('layouts.nosb')

@section('container')
   <main class="row justify-content-center">
      <div class="form-signin col-lg-5 m-auto p-5 rounded-3">
         <img class="mx-auto d-block" src="logo.png" alt="" width="72" height="72">
         <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
         @if(session()->has('registSuccess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('registSuccess') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               {{ session('loginError') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         <form action="" method="POST">
            @csrf
            <div class="form-floating text-body-secondary">
               <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" autofocus placeholder="email" required value="{{ old('email') }}">
               <label for="email">Email address</label>
               @error('email')
                   <div class="invalid-feedback">
                     {{ $message }}
                   </div>
               @enderror
            </div>
            <div class="form-floating text-body-secondary">
               <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
               <label for="password">Password</label>
            </div>
            <div class="form-check text-start my-3">
               <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
               <label class="form-check-label" for="flexCheckDefault">
               Remember me
               </label>
            </div>
            <button class="btn btn-danger w-100 py-2" type="submit">Login</button>
         </form>
         <small class="d-block mt-2 text-center">not registered? <a href="/register">Register Now</a></small>
         <p class="mt-5 mb-3 text-body-secondary">&copy;2023 - {{ date('Y') }}</p>
      </div>
   </main>
   
@endsection