@extends('layouts.main')

@section('container')
<div class="row">
   <div class="col">
      <h2 class="text-center p-3">Price List</h2>
      <table class="table table-success table-striped text-center table-bordered">
         <thead class="table-dark">
            <tr>
               <th>ID Paket</th>
               <th>Harga</th>
               <th>Jenis</th>
               <th>Deskripsi</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody >
            @foreach ($pakets as $paket)
            <tr>
               <td>{{ $paket->kode }}</td>
               <td>{{ $paket->harga }}</td>
               <td>{{ $paket->jenis }}</td>
               <td>{{ $paket->deskripsi }}</td>
               <td>
                  <a href="hapus/{{ $paket->id }}">hapus</a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection