<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
  <a class = "btn btn-primary" href="{{route('home')}}">Home</a>
  <a class = "btn btn-primary" href="{{route('contact')}}">Contact</a>
  <a class = "btn btn-primary" href="{{route('about_us')}}">About Us</a>
  <a class = "btn btn-primary" href="{{route('service')}}">Service</a>
  <a class = "btn btn-primary" href="{{route('our_team')}}">Our Team</a>

  <div>
    @yield('contant')
  </div>
</body>
</html>