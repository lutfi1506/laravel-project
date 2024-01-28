@extends('layouts.main')

@section('container')
   <h2>Hutang {{ $hutang->nama }}</h2>
   <ul>
      @foreach ($hutang->list as $list)
      <li>{{ $list->single_hutang }}</li>
      <li>{{ $list->nama }}</li>
      @endforeach
   </ul>
@endsection