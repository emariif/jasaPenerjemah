@extends('nav/nav_landing')
@section('title','Checkout Payment')
@section('konten')

    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/checkout-payment.css" />

<body>
    <div class="container pt-5">
        <h3 class="pb-3 mt-2">Job Payment</h3>
        <div class="row">
            <div class="col-md">
                <div class="card payment w-100" style="width: 18rem;">
                    <div class="card-header ps-4 pb-3 pt-3">
                        Payment Options
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" value="transfer" onclick="option(0)">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Transfer Bank
                                </label>
                                <div id="one" class="hide">
                                    <p>This is my DIV element.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" value="emoney" onclick="option(1)">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    E-Money
                                </label>
                                <div id="two" class="hide">
                                    <p>This is my DIV element.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" value="other" onclick="option(2)">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Other
                                </label>
                                <div id="three" class="hide">
                                    <p>This is my DIV element.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- array:6 [
  "nama_job" => "Dokumen Translate Buku Indonesia Mandarin"
  "deskripsi" => "Tolong kerjakan secepatnya"
  "durasi" => "2"
  "jumlah_halaman" => "12"
  "total_harga" => "120000"
  "kategori_bahasa_id" => "1"
] -->
            <div class="col-md-4">
                <div class="card job">
                    <div class="card-body">
                        <h5 class="card-title fw-normal">{{$data['nama_job']}}</h5>
                        <p class="card-text">{{$data['deskripsi']}}</p>
                        <p class="sub">Detail Job</p>
                        <div class="row detail type justify-content-between">
                            <div class="col-md-5">
                                <p class="text-start">Tujuan</p>
                            </div>
                            <div class="col-md-7">
                                <p class="text-end">{{$data['kategori_bahasa']}}</p>
                            </div>
                        </div>
                        <div class="row detail page justify-content-between">
                            <div class="col-md-8">
                                <p class="text-start">Number of Page</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-end">{{$data['jumlah_halaman']}} Pages</p>
                            </div>
                        </div>
                        <div class="row detail delivery justify-content-between">
                            <div class="col-md-7">
                                <p class="text-start">Total Delivery Time</p>
                            </div>
                            <div class="col-md-3">
                                <p class="text-end">{{$data['durasi']}} Days</p>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group job-detail list-group-flush">
                        <li class="list-group-item">
                            <div class="row detail type justify-content-between">
                                <div class="col-md-5">
                                    <p class="text-start">Service Fee</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="text-end">Rp {{$data['total_harga']}}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row detail type justify-content-between">
                                <div class="col-md-5">
                                    <p class="text-start total">Total</p>
                                </div>
                                <div class="col-md-7">
                                    <p class="text-end total">@currency($data['total_harga'])</p>
                                </div>
                                <div class="form-group">
                                <form action="{{route('joblist_confirm')}}" method="post">
                        @csrf
                                    <input type="hidden" name="users_id" value="{{$data['userDetails']}}">
                                    <input type="hidden" name="nama_job" value="{{$data['nama_job']}}">
                                    <input type="hidden" name="deskripsi" value="{{$data['deskripsi']}}">
                                    <input type="hidden" name="durasi" value="{{$data['durasi']}}">
                                    <input type="hidden" name="jumlah_halaman" value="{{$data['jumlah_halaman']}}">
                                    <input type="hidden" name="total_harga" value="{{$data['total_harga']}}">
                                    <input type="hidden" name="file" value="{{$data['file']}}">
                                    <input type="hidden" name="kategori_bahasa_id" value="{{$data['kategori_bahasa_id']}}">
                                    <input type="submit" name="register"
                                        class="form-control btn btn-dark px-3 shadow-sm register" value="Confirm & Pay">
                                </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <script>
        function option(x) {
            if (x == 0) {

                document.getElementById('one').style.display = "block";
                document.getElementById('two').style.display = "none";
                document.getElementById('three').style.display = "none";
            }

            else if (x == 1) {
                document.getElementById('one').style.display = "none";
                document.getElementById('two').style.display = "block";
                document.getElementById('three').style.display = "none";

            } else if (x == 2) {
                document.getElementById('one').style.display = "none";
                document.getElementById('two').style.display = "none";
                document.getElementById('three').style.display = "block";

            }
            return
        }
    </script>

</body>

@include('includes.footer')
@endsection