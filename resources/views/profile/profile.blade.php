@extends('nav/nav_landing')
@section('title','Profile')

@section('konten')


  <link rel="stylesheet" href="css/translator.css" />
  <link rel="stylesheet" href="css/portal.css" />

<body id="jobDetails">
  
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
    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</body>


@endsection