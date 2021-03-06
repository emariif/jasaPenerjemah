@extends('nav/nav_landing')
@section('title','Upload')
@section('konten')
<link rel="stylesheet" href="css/style-upload.css" />
<script src="js/upload-page.js"></script>

<body>


    <div class="container">
        <div class="row it">
            <div class="col-sm-offset-1 col-sm-10" id="one">
                <div class="row">
                    <div class="col-md form-group">
                        <h3 class="mb-2 mt-4">Upload Job</h3>
                        <p>Please upload documents only in 'pdf', 'docx', 'doc', 'png' & 'text' format.</p>
                    </div>
                    <!--form-group-->
                </div>
                <!--row-->
                <div id="uploader">

                    <div class="row uploadDoc">
                        <div class="col-sm-3">
                            <div class="docErr">Please upload valid file</div>
                            <!--error-->
                            <div class="fileUpload btn btn-orange">
                                <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon" />
                                <span class="upl" id="upload">Upload document</span>
                                <input type="file" class="upload up" id="up" onchange="readURL(this);" />
                            </div>
                            <!-- btn-orange -->
                        </div>
                        <!-- col-3 -->
                        <div class="col-sm-8">
                            <input type="text" class="form-control-note" name="" placeholder="Note" />
                        </div>
                        <!--col-8-->
                        <div class="col-sm-1">
                            <a class="btn-check"><i class="fa fa-times"></i></a>
                        </div>
                        <!-- col-1 -->
                    </div>

                    <div class="col-md-8">
                        <div class="form">
                            <textarea class="form-control" placeholder="Leave a note here" id="floatingTextarea2"
                                style="height: 100px; width: 980px;"></textarea>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-3">
                            <h6 class="mb-3">Choose a category</h6>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select...</option>
                                <option value="1">Indonesia to English</option>
                                <option value="2">Indonesia to Arabic</option>
                                <option value="3">Indonesia to Mandarin</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <h6 class="mb-3">Delivery</h6>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select...</option>
                                <option value="1">1 Days</option>
                                <option value="2">3 Days</option>
                                <option value="3">7 Days</option>
                                <option value="3">10 Days</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <h6 class="mb-3">Number of pages</h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h6 class="mb-3">What is your budget for the service?</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </div>
                    </div>
                    <!--row-->
                </div>
                <!--uploader-->
                <div class="text-start">
                    <a class="btn btn-new me-2"><i class="fa fa-plus"></i> Add new</a>
                    <a class="btn btn-next" href="chechkout-payment.html"><i class="fa fa-paper-plane"></i> Submit</a>
                </div>
            </div>
            <!--one-->
        </div>
        <!-- row -->
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