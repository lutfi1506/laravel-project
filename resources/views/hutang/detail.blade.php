@extends('layouts.main')

@section('container')
<div class="row">
   <div class="col-md-6 mx-auto text-center">
      <h2>Hutang {{ $hutang->nama }}</h2>
      <table class="table table-success table-striped  table-bordered">
         <thead class="table-dark">
            <tr>
               <th>No</th>
               <th>Tanggal</th>
               <th>Hutang</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($hutang->list as $list)
                <tr>
                   <td>{{ $loop->iteration }}</td>
                  <td>{{ $list->tanggal }}</td>
                  <td>{{ $list->single_hutang }}</td>
                </tr>
            @endforeach
         </tbody>
         <tfoot>
            <tr>
               <td colspan="2">Jumlah</td>
               <td>{{ $hutang->list->sum('single_hutang') }}</td>
            </tr>
         </tfoot>
      </table>
   </div>
</div>
@endsection