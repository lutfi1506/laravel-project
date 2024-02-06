@extends('layouts.main')

@section('container')
<h2>Update Pricelist</h2>
<div class="row">
   <div class="col-lg-8">
      <form method="POST" action="/pricelist/{{ $pricelist->id }}">
         @method('put')
         @csrf
         <div class="row">
            <div class="col-6 mb-3">
               <label for="kode" class="form-label">Kode</label>
               <input type="text" name="kode" style="text-transform:uppercase" class="form-control @error('kode') is-invalid @enderror" id="kode" value="{{ old('kode',$pricelist->kode) }}" required>
            </div>
            <div class="col-6 mb-3">
               <label for="type" class="form-label ">jenis</label>
               <select name="jenis" class="form-select @error('jenis') is-invalid @enderror" id="type" required>
                  <option value="" hidden></option>
                  @foreach ($types as $type)
                     @if (old('type',$pricelist->jenis) == $type)
                     <option value="{{ $type }}" selected>{{ $type }}</option>
                     @else
                     <option value="{{ $type }}">{{ $type }}</option>
                     @endif
                  @endforeach
               </select>
            </div>
         </div>
         <div class="row">
            <div class="col-6 mb-3">
               <label for="harga" class="form-label">Harga</label>
               <input class="form-control @error('harga') is-invalid @enderror" type="number" name="harga" id="harga" value="{{ old('harga',$pricelist->harga) }}" required>
            </div>
            <div class="col-6 mb-3">
               <label for="deskripsi" class="form-label">deskripsi</label>
               <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi',$pricelist->deskripsi) }}" required>
            </div>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>

@endsection