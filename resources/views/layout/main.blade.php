<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>managemen ruangan</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{ asset('/') }}assets/plugin/fontawesome/css/all.min.css" rel="stylesheet">
  </head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ROSATI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request()->segment('1')=='' || request()->segment('1')=='ruangans' ? 'active' : ''}}" aria-current="page" href="{{ url('ruangans') }}">Ruangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->segment('1')=='penjadwalans' ? 'active' : ''}}" aria-current="page" href="{{ url('penjadwalans') }}">Penjadwalan Ruangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->segment('1')=='pemeliharaans' ? 'active' : ''}}" aria-current="page" href="{{ url('pemeliharaans') }}">Pemeliharaan Ruangan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- end --}}

    {{-- content --}}
    <div class="mt-2">
        <div class="container">
            @yield('content')
        </div>
    </div>
    {{-- end content --}}
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
