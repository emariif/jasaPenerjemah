<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/translator.css" />
  <link rel="stylesheet" href="css/portal.css" />


  <!-- bootstrap-icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

  <!------ Include the above in your HEAD tag ---------->
</head>

<body id="jobDetails">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container mt-2">
      <a class="navbar-brand" href="#">
        <img src="images/" alt="" width="113" height="29" />
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbar-list-4"
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
                    <a class="dropdown-item" href="#">Edit Profile</a>
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
  <div class="container mt-5">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-12">
          <!-- order -->
          <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4 ">
            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all"
              role="tab" aria-controls="orders-all" aria-selected="true">Active</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
              href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Complete</a>
          </nav>
          <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-active" role="tabpanel" aria-labelledby="orders-paid-tab">
              <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                  <div class="table-responsive">
                    <table class="table mb-0 text-left" style="border-color: #dee2e6;">
                      <thead>
                        <tr>
                          <th class="cell">Order</th>
                          <th class="cell">Project Name</th>
                          <th class="cell">Customer</th>
                          <th class="cell">Bid Placed</th>
                          <th class="cell">Status</th>
                          <th class="cell">Total</th>
                          <th class="cell"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="cell">#15345</td>
                          <td class="cell"><span class="truncate">Translate CV</span></td>
                          <td class="cell">John Sanders</td>
                          <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
                          <td class="cell"><span class="badge bg-warning">Pending</span></td>
                          <td class="cell">$96.20</td>
                          <td class="cell"><a class="btn-sm app-btn-secondary" href="detail-job.html">View</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!--//table-responsive-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <div class="tab-pane fade" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
              <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                  <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                      <thead>
                        <tr>
                          <th class="cell">Order</th>
                          <th class="cell">Project Name</th>
                          <th class="cell">Customer</th>
                          <th class="cell">Status</th>
                          <th class="cell">Total</th>
                          <th class="cell"></th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data['active'] as $row)
                        <tr>
                          <td class="cell">#{{$row->id}}</td>
                          <td class="cell"><span class="truncate">{{$row->nama_job}}</span>
                          </td>
                          <td class="cell">{{$row->users->name}}</td>
                          <td class="cell"><span class="badge bg-primary">Progress</span></td>
                          <td class="cell">{{$row->jumlah_halaman}}</td>
                          <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('jobtransaction',$row->id)}}">View</a></td>
                        </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!--//table-responsive-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
              <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
              <!--//app-pagination-->
            </div>
            <!--//tab-pane-->

            <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
              <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                  <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                      <thead>
                        <tr>
                          <th class="cell">Order</th>
                          <th class="cell">Project Name</th>
                          <th class="cell">Customer</th>
                          <th class="cell">Status</th>
                          <th class="cell">Total</th>
                          <th class="cell"></th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data['finish'] as $row)
                        <tr>
                          <td class="cell">#{{$row->id}}</td>
                          <td class="cell"><span class="truncate">{{$row->nama_job}}</span>
                          </td>
                          <td class="cell">{{$row->users->name}}</td>
                          <td class="cell"><span class="badge bg-success">Finish</span></td>
                          <td class="cell">{{$row->jumlah_halaman}}</td>
                          <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('jobtransaction',$row->id)}}">View</a></td>
                        </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!--//table-responsive-->
                </div>
                <!--//app-card-body-->
              </div>
              <!--//app-card-->
            </div>
            <!-- akhirorder -->
          </div>
        </div>
      </div>
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
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>