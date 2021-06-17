@extends('nav/nav_landing')
{{-- @section('title', 'Detail Job') --}}
@section('konten')

<link rel="stylesheet" type="text/css" href="/css/detail-job.css">

<body id="jobDetails">
    <section id="jobDetail">
        <div class="job">
            <div class="header ">
                <div class="container">
                    <h1 class="pt-5">Translate Document CV</h1>
                    <ul class="nav nav-tabs mt-5">
                        <li class="nav-item">
                            <a class="nav-link active px-3" aria-current="page" data-bs-toggle="tab"
                                href="#details">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#proposal" data-bs-toggle="tab">Proposal</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container ">
                <div class="tab-content">
                    <div class="tab-pane active" id="details">
                        @foreach ($jobs as $job)
                        <div class="row detail-job g-4 mb-5">
                            <div class="col-md-12">
                                <div class="card shadow-sm mt-5 px-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h2 class="pt-3 pb-2">Job Details</h2>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="pt-3">{{$job->deskripsi}}</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row py-3">

                                                <div class="col-md-2 ">
                                                    <img class="image--avatar mb-0" src="images/download.jpg" alt="">
                                                    @foreach ($users as $user)

                                                    <div class="item">
                                                        <h6 style="color: #9fa5b1">User</h6>
                                                        <h6 class="type mt-2" style="color: #1b1b1d">{{$user->nama}}
                                                        </h6>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="col-md-2 me-3">
                                                    <h6 style="color: #9fa5b1">Type</h6>
                                                    <h6 class="type mt-2" style="color: #1b1b1d">
                                                        {{$job->kategori_bahasa->nama_kategori_bahasa}}
                                                    </h6>
                                                </div>
                                                <div class="col-md-1 me-4">
                                                    <h6 style="color: #9fa5b1">Delivery</h6>
                                                    <h6 class="type mt-2" style="color: #1b1b1d">{{$job->durasi}}</h6>
                                                </div>
                                                <div class="col-md-2">
                                                    <h6 style="color: #9fa5b1">Number of Page</h6>
                                                    <h6 class="type mt-2" style="color: #1b1b1d">
                                                        {{$job->jumlah_halaman}}</h6>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- <li class="list-group-item py-3 mb-2">
                                            <h4>Attachments</h4>
                                            <a href="#" class="text-primary"><span><i
                                                        class="bi bi-paperclip me-2 text-dark"></i></span>Translate
                                                Document Negara.doc</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane" id="proposal">
                        <div class="row detail-job g-4 mb-5 mt-4">
                            <div class="col-md-10">
                                <div class="card shadow-sm py-2 px-3 mb-3">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="col-md-5 mb-2">
                                                    <img class="image--avatar mb-0 me-1" src="images/download.jpg"
                                                        alt="">
                                                    <div class="item">
                                                        <h5 class="type" style="color: #1b1b1d">Daffa Fadila</h5>
                                                        <h6 class="type mt-2" style="color: #1b1b1d">
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i
                                                                    class="bi bi-star-fill text-warning pe-1"></i></span>
                                                            4.9
                                                        </h6>
                                                    </div>
                                                </div>
                                                <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Commodi aut, velit modi expedita autem illo sed cum dolorem ab
                                                    vitae, animi deserunt libero numquam reiciendis ex tempore.
                                                    Necessitatibus deleniti distinctio alias deserunt a at ipsum sit
                                                    dolorum
                                                    voluptate iste molestias ipsam ad, tenetur repellat laborum eum
                                                    sapiente
                                                    velit natus? Atque.</p>
                                            </li>
                                            <li class="list-group-item pt-3 pb-2">
                                                <p class="card-text text-end mb-3"
                                                    style="font-size: 12px;  color: #4D525B; float: left;">
                                                    Last updated 3 mins ago
                                                </p>
                                                <button class="btn btn-outline-success px-5 py-2" type="button"
                                                    style="font-size: 14px; background-color: inherit; color: green; float: right;">
                                                    Select Translator
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card shadow-sm py-2 px-3 mb-3">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="col-md-5 mb-2">
                                                    <img class="image--avatar mb-0 me-1" src="images/download.jpg"
                                                        alt="">
                                                    <div class="item">
                                                        <h5 class="type" style="color: #1b1b1d">Daffa Fadila</h5>
                                                        <h6 class="type mt-2" style="color: #1b1b1d">
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i
                                                                    class="bi bi-star-fill text-warning pe-1"></i></span>
                                                            4.9
                                                        </h6>
                                                    </div>
                                                </div>
                                                <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Commodi aut, velit modi expedita autem illo sed cum dolorem ab
                                                    vitae, animi deserunt libero numquam reiciendis ex tempore.
                                                    Necessitatibus deleniti distinctio alias deserunt a at ipsum sit
                                                    dolorum
                                                    voluptate iste molestias ipsam ad, tenetur repellat laborum eum
                                                    sapiente
                                                    velit natus? Atque.</p>

                                            </li>
                                            <li class="list-group-item pt-3 pb-2">
                                                <p class="card-text text-end mb-3"
                                                    style="font-size: 12px;  color: #4D525B; float: left;">
                                                    Last updated 3 mins ago
                                                </p>
                                                <button class="btn btn-outline-success px-5 py-2" type="button"
                                                    style="font-size: 14px; background-color: inherit; color: green; float: right;">
                                                    Select Translator
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="take-job">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header mb-4">
                                <div class="modal-title mx-3">
                                    <h3 class="pt-1">Take a Job</h3>
                                </div>
                                <button type="button" class="btn-close mx-3" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body mx-3 mb-4">
                                <form action="" class="">
                                    <div class="form-group mb-3 ">
                                        <input type="text" name="name" id="name"
                                            class="form-control input-text py-3 required" placeholder="Full Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" name="your_email" id="your_email"
                                            class="form-control py-3 input-text required" required
                                            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email Address">
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control py-3 input-text required" name="description"
                                            rows="5" placeholder="Your Message or your offer for translate document"
                                            style="resize: none;"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="take-job"
                                    class="form-control btn btn-dark shadow-sm my-3 mx-3 send" value="Send Application">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>



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
@endsection