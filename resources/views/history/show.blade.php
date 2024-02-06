@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   <div class="col-md-6 col-lg-4"> 
      <div class= "card shadow mt-3 ">
         <div class="card-header bg-dark text-white p-2">
            <h2 class="text-center">Detail</h2>
         </div>
         <div class="card-body bg-primary-subtle bg-gradient">
                  <table class="fs-5 mx-auto">
                     <tr>
                        <th>tanggal</th>
                        <td>:</td>
                        <td>{{ $lists->tanggal }}</td>
                     </tr>
                     <tr>
                        <th>Name</th>
                        <td>:</td>
                        <td>{{ $lists->nama }}</td>
                     </tr>
                     <tr>
                        <th>No Hp</th>
                        <td>:</td>
                        <td>{{ $lists->no_hp }}</td>
                     </tr>
                     <tr>
                        <th>Id Pulsa</th>
                        <td>:</td>
                        <td>{{ $lists->paket->kode }}</td>
                     </tr>
                     <tr>
                        <th>Harga</th>
                        <td>:</td>
                        <td>{{ $lists->paket->harga }}</td>
                     </tr>
                     <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td>{{ (!$lists->status)?'lunas': '- '.$lists->single_hutang }}</td>
                     </tr>
                  </table>
               <a href="/history" class="btn btn-danger mt-3 btn-sm float-start">Kembali</a>
               <p class="mt-3 float-end text-sm text-body-secondary">Created By : {{ $lists->created_by }}</p>
            </div>
         </div>
         </div>
   </div>
</div>
@endsection