@extends('nav/nav_landing')
@section('title','Job List')
@section('konten')

<link rel="stylesheet" type="text/css" href="/css/style-jobListing.css">

<body>
    <!-- Job Listing -->
    <div class="job pt-5">
        <div class="container">
            <div class="card bg-dark text-white text-center mb-5">
                <img src="/images/cover-job.jpg" class="card-img" alt="..." />
                @auth
                    @if (Auth::user() && Auth::user()->level == 'Client')
                        <div class="card-img-overlay">
                        <h1 class="fs-2 fw-bolder pb-3 pt-4">Client Job Listings</h1>
                            <p class="lead fs-6 fw-normal mb-3">There are limited proposals per job listing. Once full, an error message
                                will appear. You can try other available listings.</p>
                            <a href="{{ url('joblist/create') }}" class="btn btn-light text-dark ps-4 pe-4 pt-2 pb-2 fw-bolder"
                                style="color: white; font-size: 14px;">Buat Job
                                Baru</a>
                                <form action="{{route('cari')}}" method="post">
                                    @csrf
                                    <input type="text" name="cari">
                                    <button>Cari</button>
                                </form>
                        </div>   
                    @endif   
                    @if (Auth::user() && Auth::user()->level == 'Translator')
                        <div class="card-img-overlay">
                            <h1 class="fs-2 fw-bolder pb-3 pt-5">Client Job Listings</h1>
                            <p class="lead fs-6 fw-normal mb-5">There are limited proposals per job listing. Once full, an error
                            message will appear. You can try other available listings.</p>
                            <form action="{{route('cari')}}" method="post">
                                @csrf
                                <input type="text" name="cari">
                                <button>Cari</button>
                            </form>
                        </div>
                    @endif       
                @endauth
                
            
        </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                @foreach ($jobs as $Job)
                <div class="job col">
                    {{-- foreeach --}}
                    {{-- <a href="/jobs/1 "> --}}
                    <a href="{{url('joblist/'.$Job->id)}}">

                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{$Job->nama_job}}</h5>
                                <p class="card-text " style="overflow-y: hidden;max-height: 80px;">{{$Job->deskripsi}}</p>
                                <div class="row mt-4">
                                    <div class="col-md">
                                        {{-- @foreach ($users as $user) --}}

                                        <img class="image--avatar mb-0" src="images/download.jpg" alt="">
                                        <div class="item">
                                            <h6 class="type" style="color: #9fa5b1">User</h6>
                                            <h6 class="type mt-2" style="color: #1b1b1d">
                                                {{$Job->users->name}}
                                            </h6>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>

                                    <div class="col-md">
                                        <h6 class="type" style="color: #9fa5b1">Type</h6>
                                        <h6 class="type mt-2" style="color: #1b1b1d">
                                            {{-- {{ $bahasa->nama_kategori_bahasa }} --}}
                                            {{-- {{$bahasa->nama_kategori_bahasa}} --}}
                                            {{-- (table -> function -> nama table)) --}}
                                            {{$Job->kategori_bahasa->nama_kategori_bahasa}}
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">STARTING AT @currency($Job->total_harga)</small>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                {{-- <div class="job col">
                    <a href="">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Translate Document CV</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="row mt-4">
                                    <div class="col-md">
                                        <img class="image--avatar mb-0" src="images/download.jpg" alt="">
                                        <div class="item">
                                            <h6 class="type" style="color: #9fa5b1">User</h6>
                                            <h6 class="type mt-2" style="color: #1b1b1d">Daffa Fadila</h6>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <h6 class="type" style="color: #9fa5b1">Type</h6>
                                        <h6 class="type mt-2" style="color: #1b1b1d">Indonesia to English</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">STARTING AT Rp 400.000</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="job col">
                    <a href="">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Translate Document CV</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="row mt-4">
                                    <div class="col-md">
                                        <img class="image--avatar mb-0" src="images/download.jpg" alt="">
                                        <div class="item">
                                            <h6 class="type" style="color: #9fa5b1">User</h6>
                                            <h6 class="type mt-2" style="color: #1b1b1d">Daffa Fadila</h6>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <h6 class="type" style="color: #9fa5b1">Type</h6>
                                        <h6 class="type mt-2" style="color: #1b1b1d">Indonesia to English</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">STARTING AT Rp 400.000</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="job col">
                    <a href="">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Translate Document CV</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="row mt-4">
                                    <div class="col-md">
                                        <img class="image--avatar mb-0" src="images/download.jpg" alt="">
                                        <div class="item">
                                            <h6 class="type" style="color: #9fa5b1">User</h6>
                                            <h6 class="type mt-2" style="color: #1b1b1d">Daffa Fadila</h6>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <h6 class="type" style="color: #9fa5b1">Type</h6>
                                        <h6 class="type mt-2" style="color: #1b1b1d">Indonesia to English</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">STARTING AT Rp 400.000</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="job col">
                    <a href="">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Translate Document CV</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="row mt-4">
                                    <div class="col-md">
                                        <img class="image--avatar mb-0" src="images/download.jpg" alt="">
                                        <div class="item">
                                            <h6 class="type" style="color: #9fa5b1">User</h6>
                                            <h6 class="type mt-2" style="color: #1b1b1d">Daffa Fadila</h6>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <h6 class="type" style="color: #9fa5b1">Type</h6>
                                        <h6 class="type mt-2" style="color: #1b1b1d">Indonesia to English</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">STARTING AT Rp 400.000</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="job col">
                    <a href="">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Translate Document CV</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <div class="row mt-4">
                                    <div class="col-md">
                                        <img class="image--avatar mb-0" src="images/download.jpg" alt="">
                                        <div class="item">
                                            <h6 class="type" style="color: #9fa5b1">User</h6>
                                            <h6 class="type mt-2" style="color: #1b1b1d">Daffa Fadila</h6>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <h6 class="type" style="color: #9fa5b1">Type</h6>
                                        <h6 class="type mt-2" style="color: #1b1b1d">Indonesia to English</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">STARTING AT Rp 400.000</small>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>


        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center MT mt-5">
            <li class="page-item <?php if($jobs->onFirstPage()){echo 'disabled';}else{echo '';}?>">
                    <a class="page-link" href="{{$jobs->previousPageUrl()}}" tabindex="-1" <?php if($jobs->onFirstPage()){echo 'aria-disabled="true"';}else{echo 'aria-disabled="false"';}?>>Previous</a>
                  </li>
                  <li class="page-item <?php if($jobs->nextPageUrl() == null){echo 'disabled';}else{echo '';}?>"">
                    <a class="page-link" href="{{$jobs->nextPageUrl()}}">Next</a>
                  </li>
            </ul>
        </nav>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <img class="mb-2" src="images/Translator..svg" alt="Logo" width="140" />
                    <p>Base in Malang, Indonesia</p>
                </div>
                <div class="col-md-2 mb-2">
                    <p class="fw-bold">About</p>
                    <p>About Us</p>
                    <p>Contact Me</p>
                </div>
                <div class="col-md-3 mb-2">
                    <p class="fw-bold">Translator</p>
                    <p>Freelance</p>
                    <p>FAQ</p>
                    <p>Job Listing</p>
                </div>
                <div class="col-md-2">
                    <p class="foot fs-6 fw-bold mb-1">Social Media</p>
                    <div class="row">
                        <div class="col mb-3">
                            <a href="#" target="_blank"><i class="bi bi-facebook fs-3 me-2 text-dark"></i></a>
                            <a href="#" target="_blank"><i class="bi bi-instagram fs-3 me-2 text-dark"></i></i></a>
                            <a href="" target="_blank"><i class="bi bi-youtube fs-3 text-dark"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>
@endsection