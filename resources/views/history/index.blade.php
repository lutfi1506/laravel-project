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
{{-- @dd($pembelianChart) --}}
@if($lists->count() !== 0 )
<div class="container">
   <div class="row">
      <div class="col-4">
         <div class="card" >
            {!! $pembelianChart->container() !!}
         </div>
      </div>
   </div>
</div>
    

<table class="table table-success table-striped text-center table-bordered">
   <thead class="table-dark">
      <tr>
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
         <td>{{ $list->tanggal }}</td>
         <td>{{ $list->paket->kode }}</td>
         <td>{{ $list->no_hp }}</td>
         <td>{{ $list->nama }}</td>
         <td>
            <a href="history/detail/{{ $list->id }}">detail</a>
            <a href="history/delete/{{ $list->id }}">delete</a>
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
<script src="{{ $pembelianChart->cdn() }}"></script>
{{ $pembelianChart->script() }}
@endsection