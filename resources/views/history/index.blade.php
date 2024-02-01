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
@if($lists->count() !== 0 )
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
            <a href="history/edit/{{ $list->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
            <a href="history/delete/{{ $list->id }}" class="badge bg-danger"><span data-feather="x-circle"></span></a>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@else

@endif
<div class="row">
   <div class="col">
      {{ $lists->links() }}
   </div>
</div>
@endsection