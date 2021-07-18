@extends('nav/nav_landing')
@section('title','Faq')
@section('konten')

<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="faq.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/faq.css" />

<body>

  <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
    <div class="container pt-3">
      <h2 class="mt-5">Frequently Asked Questions</h2>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                href="#collapse0" aria-expanded="true" aria-controls="collapse0"> Our services
              </a>
            </h3>
          </div>
          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body px-3 mb-4">
              <p>
                Kami menyediakan jasa penerjemah dokumen dengan berbagai macam
                bahasa
                untuk diterjemahkan oleh translator handal dengan berbagai macam pengalaman
              </p>
              <ul>
                <li><span class="fw-bolder">Translate Bahasa</span>, Menyediakan jasa terjemahan dari bahasa indonesia
                  kedalam berbagai
                  bahasa
                  ataupun sebaliknya.
                </li>
                <li><span class="fw-bolder">Penyedia Pekerjaan</span>, Menyediakan Pekerjaan untuk para translator
                  sesuai
                  dengan keahlian
                  penerjemah
                  masing-masing.
                </li>
                <li><span class="fw-bolder">Cari Penerjemah</span>, Terjemahkan dokumen Anda dan para translator akan
                  mengerjakan dokumen
                  sesuai
                  permintaan.
                </li>
                <li><span class="fw-bolder">Convert File</span>, Convert file sesuai dengan permintaan format dari
                  client
                  seperti pdf, word,
                  dll.
                </li>

              </ul>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                href="#collapse1" aria-expanded="true" aria-controls="collapse1"> How It Work? </a>
            </h3>
          </div>
          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body px-3 mb-4">
              <p>
                Setiap dokumen yang akan diterjemahkan akan langsung diserahkan kepada freelancer. Client yang akan
                tinggal menunggu
                hasil jadi, kepuasan pelanggan adalah hal utama
              </p>
              <ul>
                <li><span class="fw-bolder">Sign In</span>, Setiap client atau freelancer harus memiliki akun untuk
                  dapat
                  mengakses website.
                </li>
                <li><span class="fw-bolder">Upload File</span>, Client harus mengupload file yang akan diterjemahkan,
                  detail dokumen dan pembayaran akan muncul.
                </li>
                <li><span class="fw-bolder">Lakukan Pembayaran</span>, Lakukan pembayaran untuk segera dokumen Anda di
                  proses oleh translator Kami.
                </li>
                <li><span class="fw-bolder">Proses Dokumen</span>, Translator Kami akan segera proses dokumen yang Anda
                  kirimkan, dan akan selesai sesuai permintaan.
                </li>

              </ul>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
            <h3 class="panel-title">
              <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion"
                href="#collapse2" aria-expanded="true" aria-controls="collapse2"> Mengapa Kami?
              </a>
            </h3>
          </div>
          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body px-3 mb-4">
              <ul>
                <li><span class="fw-bolder">On Time</span>, Deadline tepat waktu sesuai dengan kesepakatan dan
                  permintaan dari client.
                </li>
                <li><span class="fw-bolder">Fast Response</span>, Setiap dokumen yang akan diterjemahkan akan langsung
                  dikerjakan freelancer.
                </li>
                <li><span class="fw-bolder">Enjoy with quality</span>, Diterjemahkan oleh translator yang handal,
                  Kualitas terjemahan dokumen Anda adalah kepuasan Kami
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  @include('includes.footer')
</body>
@endsection