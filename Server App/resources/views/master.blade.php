<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <title>Simple Auth</title>
 <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
   @yield('content')
</div>
 
</body>
</html>
