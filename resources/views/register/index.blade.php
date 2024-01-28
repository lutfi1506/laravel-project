@extends('layouts.nosb')

@section('container')
   <main class="row justify-content-center">
      <div class="form-regis col-lg-5 m-auto p-5 rounded-3">
         <img class="mx-auto d-block" src="logo.png" alt="" width="72" height="72">
         <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
         <form action="/register" method="POST">
            @csrf
            <div class="form-floating text-body-secondary">
               <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}" required>
               <label for="name">Name</label>
            </div>
            <div class="form-floating text-body-secondary">
               <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}" required>
               <label for="email">Email address</label>
               @error('email')
                   <div class="invalid-feedback">
                     {{ $message }}
                   </div>
               @enderror
            </div>
            <div class="form-floating text-body-secondary">
               <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="Password" placeholder="password" value="{{ old('password') }}" required>
               <label for="Password">Password</label>
               @error('password')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
               @enderror
            </div>
            <button class="btn btn-danger w-100 mt-3 py-2" type="submit">Sign Up</button>
         </form>
         <small class="d-block mt-2 text-center">do you have account? <a href="/login">login</a></small>
         <p class="mt-5 mb-3 text-body-secondary">&copy;2023 - {{ date('Y') }}</p>
      </div>
   </main>
@endsection