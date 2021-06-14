@extends('nav/nav_landing')
@section('title','Translator')

@section('landing_page')
<link rel="stylesheet" href="css/style.css" />

<!-- jumbotron -->
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1 class="display-4 pt-4">Jadikan Urusan Anda Lebih <br />Mudah Dengan Translator</h1>
                <p class="lead">Terjemahkan dokumen anda dengan mudah dengan Translator <br />Kami siap membantu
                    menerjemahkan
                    kedalam bahasa yang dinginkan <br />terjemahan akan lebih mudah dengan Translator.</p>
                <div class="row">
                    <div class="col-md-4">
                        @guest
                            <a class="btn btn-dark btn-lg me-3" href="{{ url('login') }}" role="button">Find a Job</a>
                            <a class="btn btn-outline-dark btn-lg" href="{{ url('login') }}" role="button">Post a Job</a>
                        @endguest

                        @auth
                            @if (Auth::user() && Auth::user()->level == 'Client')
                                <a class="btn btn-outline-dark btn-lg" href="{{ url('joblist/create') }}" role="button">Buat Job Baru</a>
                            @endif   
                            @if (Auth::user() && Auth::user()->level == 'Translator')
                                <a class="btn btn-outline-dark btn-lg" href="{{ url('joblist') }}" role="button">Temukan Job</a>
                            @endif   
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir Jumbotron -->

<!-- services -->
<section id="services">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <h1 class="fs-2 fw-bolder pb-2 pt-5">Our services</h1>
                <p class="lead fs-6 fw-normal mb-5">Kami menyediakan jasa penerjemah dokumen dengan berbagai macam
                    bahasa
                    untuk diterjemahkan oleh translator handal dengan berbagai macam pengalaman</p>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="/images/tes.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Translate Bahasa</h5>
                        <p class="card-text">Menyediakan jasa terjemahan dari bahasa indonesia kedalam berbagai bahasa
                            ataupun
                            sebaliknya.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="images/tes2.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Penyedia Pekerjaan</h5>
                        <p class="card-text">Menyediakan Pekerjaan untuk para translator sesuai dengan keahlian
                            penerjemah
                            masing-masing.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="images/tes3.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Cari Penerjemah</h5>
                        <p class="card-text">Terjemahkan dokumen Anda dan para translator akan mengerjakan dokumen
                            sesuai
                            permintaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="images/tes4.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Convert File</h5>
                        <p class="card-text">Convert file sesuai dengan permintaan format dari client seperti pdf, word,
                            dll. .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir services -->

<!-- works -->
<section id="works">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <h1 class="fs-2 fw-bolder pb-2 pt-5">How It Work</h1>
                <p class="lead fs-6 fw-normal mb-5">Setiap dokumen yang akan diterjemahkan akan langsung diserahkan
                    kepada
                    freelancer. Client yang akan tinggal menunggu hasil jadi, kepuasan pelanggan adalah hal utama</p>
            </div>
        </div>
        <div class="row justify-content-center text-center pb-5">
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="images/login.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Sign In</h5>
                        <p class="card-text">Setiap client atau freelancer harus memiliki akun untuk dapat mengakses
                            website.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="images/upload.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Upload File</h5>
                        <p class="card-text">Client harus mengupload file yang akan diterjemahkan, detail dokumen dan
                            pembayaran
                            akan muncul.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="images/payment.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Lakukan Pembayaran</h5>
                        <p class="card-text">Lakukan pembayaran untuk segera dokumen Anda di proses oleh translator
                            Kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="images/progress.svg" alt="" width="210" height="187" />
                        <h5 class="card-title pt-4 pb-2">Proses Dokumen</h5>
                        <p class="card-text">Translator Kami akan segera proses dokumen yang Anda kirimkan, dan akan
                            selesai
                            sesuai permintaan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-3">
                <a class="btn btn-dark btn-lg" href="#" role="button">Post a Job</a>
            </div>
        </div>
    </div>
</section>
<!-- akhir works -->

<!-- benefit -->
<section id="benefit">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1 class="mb-4 fw-bolder fs-1">Mengapa Kami</h1>
                <div class="row">
                    <h5 class="fs-5"><i class="bi bi-check-circle"></i> On Time</h5>
                    <p class="mb-4 fs-5">Deadline tepat waktu sesuai dengan kesepakatan dan permintaan dari client.</p>
                </div>
                <div class="row">
                    <h5 class="fs-5"><i class="bi bi-check-circle"></i> Fast Respone</h5>
                    <p class="mb-4 fs-5">Setiap dokumen yang akan diterjemahkan akan langsung dikerjakan freelancer.</p>
                </div>
                <div class="row">
                    <h5 class="fs-5"><i class="bi bi-check-circle"></i> Enjoy with quality</h5>
                    <p class="mb-4 fs-5">Diterjemahkan oleh translator yang handal, Kualitas terjemahan dokumen Anda
                        adalah
                        kepuasan Kami.</p>
                </div>
            </div>
            <div class="col-md text-end mt-4">
                <img src="images/why1.jpg" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- akhir benefit -->


@endsection