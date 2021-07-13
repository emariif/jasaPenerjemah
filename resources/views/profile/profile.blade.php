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
            
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
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
                  <li class="page-item <?php $data['active']->setPageName('active'); if($data['active']->onFirstPage()){echo 'disabled';}else{echo '';}?>">
                    <a class="page-link" href="{{$data['active']->previousPageUrl()}}" tabindex="-1" <?php if($data['active']->onFirstPage()){echo 'aria-disabled="true"';}else{echo 'aria-disabled="false"';}?>>Previous</a>
                  </li>
                  <li class="page-item <?php if($data['active']->nextPageUrl() == null){echo 'disabled';}else{echo '';}?>"">
                    <a class="page-link" href="{{$data['active']->nextPageUrl()}}">Next</a>
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
              <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                  <li class="page-item <?php $data['finish']->setPageName('finish'); if($data['finish']->onFirstPage()){echo 'disabled';}else{echo '';}?>">
                    <a class="page-link" href="{{$data['finish']->previousPageUrl()}}" tabindex="-1" <?php if($data['finish']->onFirstPage()){echo 'aria-disabled="true"';}else{echo 'aria-disabled="false"';}?>>Previous</a>
                  </li>
                  <li class="page-item <?php if($data['finish']->nextPageUrl() == null){echo 'disabled';}else{echo '';}?>">
                    <a class="page-link" href="{{$data['finish']->nextPageUrl()}}">Next</a>
                  </li>
                </ul>
              </nav>
              <!--//app-pagination-->
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