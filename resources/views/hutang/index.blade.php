@extends('layouts.main')

@section('container')

<div class="row">
   <div class="col-md-4 text-center mx-auto">
      <h2>Hutang</h2>
      <ul class="list-group">
         @foreach ($hutangs as $hutang)
         <li class="list-group-item"><a class="text-decoration-none" href="/hutang/{{ $hutang->id }}">{{ $hutang->nama }}</a></li>
         @endforeach
      </ul>
   </div>
</div>
@endsection