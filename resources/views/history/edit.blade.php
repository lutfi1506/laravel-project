@extends('layouts.main')
@section('container')
   <h2> Create New History</h2>
   <div class="row">
      <div class="col-lg-8">
         <form method="POST" action="/history">
            @csrf
            <div class="row">
               
               <div class="col-6 col-md-4 mb-3">
                  <label for="id" class="form-label">ID Pulsa</label>
                  <select class="form-select" name="paket_id" id="id">
                     @foreach ($pakets as $paket)
                     @if (old('paket_id',$history->paket_id) == $paket->id)
                     <option value="{{ $paket->id }}" selected>{{ $paket->kode }}</option>
                     @else
                     <option value="{{ $paket->id }}">{{ $paket->kode }}</option>
                     @endif
                     @endforeach
                  </select>
               </div>
               <div class="col-6 col-md-4 mb-3">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="date" required value="{{ old('tanggal',$history->tanggal) }}">
                  @error('tanggal')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
               </div>
               <div class="col-md-4 mb-3">
                  <label for="nohp" class="form-label">No Hp</label>
                  <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="nohp" required value="{{ old('no_hp',$history->no_hp) }}">
                  @error('no_hp')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
               </div>
               <div class="col-md-4 mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="name" required value="{{ old('nama',$history->nama) }}">
                  @error('nama')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
               </div>
            </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
      </div>
   </div>
   <script>
      const input = document.getElementById('disabled');
      const select = document.getElementById('disabled-select');

      const checkbox = document.getElementById('checkbox');
      checkbox.addEventListener('click',function(){
         if(checkbox.checked){
            input.disabled = false;
            select.disabled = false;
         }else{
            input.disabled = true;
            select.disabled = true;
         }
      })
   </script>
@endsection