<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/mailstyle.css" />
  <link rel="stylesheet" href="css/2.css" />
  <link rel="stylesheet" href="css/nav.css" />

  <!-- bootstrap-icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

</head>

<body id="jobDetails">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container mt-2">
      <a class="navbar-brand" href="#">
        <img src="images/Translator..svg" alt="" width="113" height="29" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="job-listing.html">Job Listing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-inline-block d-sm-none">
              <img src="images/users/user-1.jpg" class="img-fluid rounded" alt="" />
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item">a</a></li>
              <li><a class="dropdown-item">b</a></li>
              <li><a class="dropdown-item">c</a></li>
            </ul>
          </li>
          <nav class="navbar-expand-sm">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-4">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg"
                      width="30" height="30" class="rounded-circle" />
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="profile_translator.html">Profile</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <div class="container space mt-5">
    <div class="row justify-content-center">
      <div class="card col-md-9 shadow-sm">
        <div>
          <div class="mt-4 mx-4">
            <table class="table-borderless ">
              <strong style="display: inline-block;">Order #{{$job->id}}</strong>
              <div class="item" style="float: right;">
                <p class="" style="display: inline-block; ">Status</p>
                <p class=" badge {{$job['color']}}" style="display: inline-block; ">{{$job['status']}}</p>
              </div>
          </div>

          <table class="mt-5 mb-4">
            <tr>
              <td>
                <div>
                  Client
                </div>
              </td>
              <td style=" padding-left: 40px; padding-right: 20px;">:</td>
              <td>
                <div>
                  <a href="#" class="link-secondary text-secondary">{{$job->users->name}}</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div>
                  Translator
                </div>
              </td>
              <td style="padding-left: 40px;">:</td>
              <td>
                <div>
                  <a href="#profile" class="link-success text-success">@if($job['translator_id'] != null){{$job->Translator->name}}@endif</a>
                </div>
              </td>
              <td>
                <div>
                </div>
              </td>
            </tr>
          </table>

          <table class="table table-borderless col-11">

            <thead class="card-header" style="border: transparent;">
              <tr class="" style="color: #62646a;">
                <th>Nama Item</th>
                <th>Jenis Bahasa</th>
                <th>Jumlah Halaman</th>
                <th>Durasi</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$job['nama_job']}}</td>
                @php
                $bahasa=$job->bahasa()->get()
                @endphp
                <td>{{$bahasa[0]['nama_kategori_bahasa']}}</td>
                <td style="padding-left: 55px">{{$job['jumlah_halaman']}}</td>
                <td>{{$job['durasi']}} hari</td>
                <td>Rp {{$job['total_harga']}}</td>
              </tr>
            </tbody>
          </table>
          <hr style="color: #AEAEAE;">
          <div class="me text-end me-4 mb-3" style="font-weight: 600;">
            <p class="pe-2" style="display: inline-block;">Total</p>
            <p style="display: inline-block;">Rp {{$job['total_harga']}}</p>
          </div>

        </div>
      </div>


    </div>
    <div class="col-md-9 mt-2" style="width: 77%;">

      <!--new_message_head-->

      <div class="card col-md-12 mt-4 shadow-sm">
 <table class="table table-bordered col-11">

            <thead class="card-header" style="border: transparent;">
              <tr class="" style="color: #62646a;">
                <th class="col-sm-6">File Asal</th>
                
            @auth
                @if (Auth::user() && Auth::user()->level == 'Client')
                  <th>File Terjemahan</th>
                @elseif (Auth::user() && Auth::user()->level == 'Translator')
                  <th>Upload Terjemahan</th>
                @endif
            @endauth

              </tr>
            </thead>
            
            <tbody>
              <tr>
                <td><a href="{{asset('data_file').'/'.$job['file']}} ">unduh file asal</a></td>
                
            @auth
                @if (Auth::user() && Auth::user()->level == 'Client' &&  $job['file_translated'] !=null)
                <td><a href="{{asset('data_file').'/'.$job['file_translated']}}">unduh file terjemahan</a></td>
                @elseif (Auth::user() && Auth::user()->level == 'Translator')
                @if($job['file_translated'] == null)
                  <td>
                      <form action="{{route('jobtransaction_post_file',$job['id'])}}" method="POST" enctype="multipart/form-data">
                          @csrf
                                    <input type="file" name="file" class="upload up" id="up" onchange="readURL(this);" /> 
                          <button class="btn btn-primary btn-sm"><i class=" fa fa-paper-plane"></i>Submit</button>
                      </form>
                  </td>
                  @elseif ($job['file_translated'] != null)
                  <td><a href="{{asset('data_file').'/'.$job['file_translated']}}">unduh file terjemahan</a></td>

                  @endif
                @endif
            @endauth
            </tbody>
          </table>
        
      </div>
      </div>
    </div>

    <div></div>

  </div>
  </div>
</body>

</html>