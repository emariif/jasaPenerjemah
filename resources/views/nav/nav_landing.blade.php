<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}"> --}}

  {{-- css --}}
  <link rel="stylesheet" href="/public/css/style-jobListing.css" />


  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />


  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>




  {{-- icon bootstrap --}}

  <title>@yield('title')</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container mt-2">
      <a class="navbar-brand" href="{{ url('/')}}">
        <img src="/images/Translator..svg" alt="" width="113" height="29" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('joblist') }}">Job Listing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq">FAQ</a>
          </li>
          @guest
              <li class="nav-item">
            <a class="nav-link" href="{{ url('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('register') }}" class="btn btn-dark ps-4 pe-4 pt-2 pb-2"
              style="color: white">Join</a>
          </li>
          @endguest
          
          @auth
               @if (Auth::user() && Auth::user()->level == 'Client'||'Translator')
              <nav class="navbar-expand-sm">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbar-list-4"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-4">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                      {{ Auth::user()->name ?? 'None'}}
                    </span>
                    <!-- <img
                      src="https://images.unsplash.com/photo-1612462767153-e8fd5ef189f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=401&q=80"
                      width="25" height="25" class="rounded-circle ms-2" /> -->
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <button class="dropdown-item" type="button" onclick="event.preventDefault(); location.href=''">Setting</button>
                    <button class="dropdown-item" type="button" onclick="event.preventDefault(); location.href='{{ route('profile') }}'">Profile</button>
                    <form action="{{ url('logout') }}" method="POST">
                      @csrf
                      <button class="dropdown-item" type="submit">Keluar</button>
                    </form>
                    
                  </div>
                </li>
              </ul>
            </div>
          </nav>
          @endif
          @endauth
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- tabel -->

  @yield('konten')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" type="text/css" href="css/style-upload.css">

  @yield('landing_page')
  {{-- @yield('faq') --}}
  @yield('clientDetailjob')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</body>

</html>