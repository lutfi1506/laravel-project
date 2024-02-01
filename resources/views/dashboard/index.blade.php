@extends('layouts.main')

@section('container')
<h2 class="my-3">Dashboard</h2>
<div class="row my-3">
   <div class="col-5">
      <div class="row">
         <div class="col">
            <div class="card border-left-primary shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Earnings (Monthly)</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-calendar fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col">
            <div class="card border-left-primary shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Earnings (Monthly)</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-calendar fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card">
         {!! $costumers->container() !!}
      </div>
   </div>
</div>
<script src="/js/apexcharts.js"></script>
{{ $costumers->script() }}
@endsection