@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   <h2 class="my-3 d-flex col-md-8">history</h2>
   <div class="col-md-4">
      <form action="">
         <div class="input-group my-3">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <button class="btn btn-dark" type="submit">Search</button>
         </div>
      </form>
   </div>
</div>
<a href="/history/create" class="btn btn-primary mb-3 ">create new history</a>
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
         <td>
            <a href="history/{{ $list->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="history/{{ $list->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="history/{{ $list->id }}" method="POST" class="d-inline">
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
@endsection