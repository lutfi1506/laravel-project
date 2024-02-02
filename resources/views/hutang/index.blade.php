@extends('layouts.main')

@section('container')
   <h2>Hutang</h2>
   <ul>
      @foreach ($hutangs as $hutang)
      <li><a href="/hutang/{{ $hutang->id }}">{{ $hutang->nama }}</a></li>
      @endforeach
   </ul>
@endsection