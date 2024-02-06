@extends('layouts.main')

@section('container')

<div class="row">
   <div class="col">
      <h2 class="text-center p-3">Price List</h2>
      <a href="/pricelist/create" class="btn btn-primary mb-3 ">create new pricelist</a>
      @if (session()->has('success'))
         <div class="alert alert-success" role="alert">
            {{ session('success') }}
         </div>
      @endif
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
                  <a href="pricelist/{{ $paket->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="pricelist/{{ $paket->id }}" method="POST" class="d-inline-block text-center">
                     @method('delete')
                     @csrf
                     <button class="badge bg-danger" onclick="return confirm('are you sure')"><span data-feather="x-circle"></span></button>
                  </form>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection



{{-- <a href="/history/create" class="btn btn-primary mb-3 ">create new history</a>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
@endif
@if($lists->count() !== 0 )
<div class="row">
   <div class="col">
      <table class="table table-success table-striped text-center table-bordered">
   <thead class="table-dark">
      <tr>
         <th>No</th>
         <th>Tanggal</th>
         <th>ID Pulsa</th>
         <th>No HP</th>
         <th>Nama</th>
         <th>Status</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody >
      @foreach ($lists as $list)
      <tr>
         <td> {{ $lists->firstItem() + $loop->index }} </td>
         <td>{{ $list->tanggal }}</td>
         <td>{{ $list->paket->kode }}</td>
         <td>{{ $list->no_hp }}</td>
         <td>{{ $list->nama }}</td>
         <td>{{ (!$list->status)?'lunas': '- '.$list->single_hutang }}</td>
         <td>
            <a href="history/{{ $list->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="history/{{ $list->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="history/{{ $list->id }}" method="POST" class="d-inline-block text-center">
               @method('delete')
               @csrf
               <button class="badge bg-danger" onclick="return confirm('are you sure')"><span data-feather="x-circle"></span></button>
            </form>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
   </div>
</div>
@else

@endif
<div class="row">
   <div class="col">
      {{ $lists->links() }}
   </div>
</div>
@endsection --}}