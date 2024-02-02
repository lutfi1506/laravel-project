<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('/css/mystyle.css') }}">
   <title>{{ $title }}</title>
</head>
<body class="bg-body-secondary">
   @include('partials.navbar')
   <div class="blank"></div>
   <main class="d-flex">
      @include('partials.sidebar')
      <div class="main col  pt-3">
         <div class="container">
            @yield('container')
         </div>
      </div>
   </main>
   <script src="/js/popper.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
   <script>
      feather.replace();
   </script>
   <script src="/js/myjs.js"></script>
</body>
</html>