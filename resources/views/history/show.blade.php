@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   <div class="col-md-6 col-lg-4"> 
      <div class= "card shadow mt-3 ">
         <div class="card-header bg-dark text-white p-2">
            <h2 class="text-center">Detail</h2>
         </div>
         <div class="card-footer bg-primary-subtle bg-gradient fs-5">
            <div class="row">
               <div class="col text-end">
                  Tanggal :
               </div>
               <div class="col">
                  {{ $lists->tanggal }}
               </div>
            </div>
            <div class="row">
               <div class="col text-end">
                  No hp :
               </div>
               <div class="col">
                  {{ $lists->no_hp }}
               </div>
            </div>
            <div class="row">
               <div class="col text-end">
                  nama :
               </div>
               <div class="col">
                  {{ $lists->nama }}
               </div>
            </div>
            <div class="row">
               <div class="col text-end">
                  ID Pulsa :
               </div>
               <div class="col">
                  {{ $lists->paket->kode }}
               </div>
            </div>
            <div class="row">
               <div class="col text-end">
                  Harga :
               </div>
               <div class="col">
                  {{ $lists->paket->harga }}
               </div>
            </div>
            <div class="row">
               <div class="col text-end">
                  Jenis Paket :
               </div>
               <div class="col">
                  {{ $lists->paket->jenis }}
               </div>
            </div>
            <a href="/history" class="btn btn-danger btn-sm mt-3">Kembali</a>
         </div>
         </div>
   </div>
</div>
@endsection