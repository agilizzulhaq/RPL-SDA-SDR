<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS RPL</title>
    <link href="{{ asset('/')}}asset/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link {{(request()->segment('1')=='' || request()->segment('1')=='home')? 'active' : ''}}" aria-current="page" href="{{url('home')}}">Home</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link {{(request()->segment('1')=='mahasiswa_alyzar')? 'active' : ''}}" aria-current="page" href="{{url('mahasiswa_alyzar')}}">Students</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="mt-2">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('/')}}asset/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>