<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
   <title>{{ $title }}</title>
</head>
<body class="bg-secondary-subtle">
   <div class="container">
      @yield('container')
   </div>
   <script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>