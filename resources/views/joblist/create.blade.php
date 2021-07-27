@extends('nav/nav_landing')
@section('title','Upload')
@section('konten')
<link rel="stylesheet" type="text/css" href="/css/style-upload.css">

<script src="js/upload-page.js"></script>

<body>


    <div class="container">
        <div class="row it">
            <div class="col-sm-offset-1 col-sm-10" id="one">
                <div class="row">
                    <div class="col-md form-group">
                        <h3 class="mb-2 mt-4">Upload Job</h3>
                        <p>Please upload documents only in 'pdf' format.</p>
                    </div>
                    <!--form-group-->
                </div>
                <!--row-->
                {{-- <form method="POST" action="/joblist">
                    @csrf

                    <label for="nama">Nama</label>
                    <input class="form-control form-control-lg" type="text" placeholder="masukkan nama" id="nama"
                        name="nama">
                    <button class="btn btn-next" type="submit"><i class="fa fa-paper-plane"></i>Submit
                    </button>
                </form> --}}

                <div id="uploader">
                    <form action="{{url('joblist')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row uploadDoc">
                            <div class="col-sm-3">
                                <div class="docErr">Please upload valid file</div>
                                <!--error-->
                                <div class="fileUpload btn btn-orange">
                                    <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon" />
                                    <span class="upl" id="upload">Upload Dokumen</span>
                                    <input type="file" name="file"
                                        class="upload up @error ('deskripsi') is-invalid @enderror" id="up"
                                        onchange="readURL(this);" accept="application/pdf, application/msword" />
                                </div>
                                @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror

                                <!-- btn-orange -->
                            </div>
                            <!-- col-3 -->
                            <div class="col-sm-8">
                                <input type="text" class="form-control-note" name="nama_job" placeholder="Judul Jobs" />

                            </div>
                            <!--col-8-->
                            <div class="col-sm-1">
                                <a class="btn-check"><i class="fa fa-times"></i></a>
                            </div>
                            <!-- col-1 -->
                        </div>

                        <div class="col-md-8">
                            <div class="form">
                                <textarea class="form-control  @error ('deskripsi') is-invalid @enderror"
                                    name="deskripsi" placeholder="Deskripsi" id="floatingTextarea2"
                                    style="height: 100px; width: 980px;"></textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="row mt-4">
                            <div class="col-md-3">
                                <h6 class="mb-3">Pilihan Bahasa</h6>
                                <select name="kategori_bahasa_id"
                                    class="form-select @error ('deskripsi') is-invalid @enderror" id="kategori_bahasa">
                                    {{-- <option selected>Pilih Bahasa</option> --}}
                                    <option>Pilih Bahasa</option>
                                    @foreach ($kategori_bahasa as $job)
                                    <option value="{{$job->id}}">
                                        {{$job->nama_kategori_bahasa}}</option>
                                    @endforeach
                                </select>
                                @error('kategori_bahasa_id')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <h6 class="mb-3">Lama Pengerjaan</h6>
                                <select name="durasi" class="form-select  @error ('deskripsi') is-invalid @enderror"
                                    aria-label="Default select example">
                                    <option disabled value="" selected>Pilih...</option>
                                    <option value="1">1 Days</option>
                                    <option value="2">3 Days</option>
                                    <option value="3">7 Days</option>
                                    <option value="3">10 Days</option>
                                </select>
                                @error('durasi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <h6 class="mb-3">Jumlah Halaman</h6>
                                <div class="input-group mb-3">
                                    <input type="text" name="jumlah_halaman"
                                        class="form-control @error ('deskripsi') is-invalid @enderror"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6 class="mb-3">Harga yang ditawarkan</h6>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="total_harga"
                                        class="form-control @error ('deskripsi') is-invalid @enderror"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </div>
                        </div>
                        <!--row-->
                </div>
                <!--uploader-->
                <div class="text-start">
                    {{-- <a class="btn btn-new me-2"><i class="fa fa-plus"></i> Add new</a> --}}
                    {{-- <a class="btn btn-next" type="submit" href="{{url('joblist/create')}}"><i
                        class="fa fa-paper-plane"></i>
                    Submit</a> --}}
                    <button class="btn btn-new me-2"><i class=" fa fa-paper-plane"></i>Submit</button>
                    </form>
                </div>
            </div>
            <!--one-->
        </div>
        <!-- row -->
    </div>


    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

@endsection