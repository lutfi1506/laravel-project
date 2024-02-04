@extends('layouts.main')

@section('container')
<div class="row">
   <div class="col-md-6 mx-auto text-center">
      <h2>Hutang {{ $hutang->nama }}</h2>
      <table class="table table-success table-striped  table-bordered">
         <thead class="table-dark">
            <tr>
               <th>No</th>
               <th>Action</th>
               <th>Tanggal</th>
               <th>Hutang</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($hutang->list as $list)
                <tr>
                   <td>{{ $loop->iteration }}</td>
                   <td>
                      <a class="badge text-decoration-none bg-warning" href="">edit</a>
                      <a class="badge text-decoration-none bg-primary" href="">delete</a>
                   </td>
                  <td>{{ $list->tanggal }}</td>
                  <td>{{ $list->single_hutang }}</td>
                </tr>
            @endforeach
         </tbody>
         <tfoot>
            <tr>
               <td colspan="3">Jumlah</td>
               <td>{{ $hutang->list->sum('single_hutang') }}</td>
            </tr>
         </tfoot>
      </table>
   </div>
</div>
@endsection