@extends('nav/nav_landing')
@section('title','Profile')

@section('konten')


  <link rel="stylesheet" href="css/translator.css" />
  <link rel="stylesheet" href="css/portal.css" />

<body id="jobDetails">
  
  <div class="container mt-5">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          @foreach ($data['user'] as $item)
              <div class="card">
            <div class="card-body">
              <div class="d-flex">
                {{-- <img src="images/users/user-1.jpg" alt="Admin" class="pf1 profile1 text-center" width="150" /> --}}
                <div class="ps-4 pt-4 text-center">
                  <h4>{{ $item->username }}</h4>
                </div>
              </div>
            </div>
            <hr class="ms-3 me-3" />
            <!-- profiledetail -->
            <div class="col-md-auto ms-2">
              <ul class="list-group list-group-flush list-group-horizontal-md">
                <style>
                  .profileit {
                    width: 100%;
                    text-decoration: none;
                    padding: 5px;
                    display: block;
                  }

                  .profileisi2 {
                    padding: 5px;
                    padding-left: 20px;
                    width: 100%;
                    font-weight: 600;
                  }
                </style>
                <li style="background: none;">

                  <div class="profileit">
                    <i class="bi bi-geo-alt-fill"><span class="ms-2">Nama</span></i>
                  </div>
                  <div class="profileit">
                    <i class="bi bi-person-fill"><span class="ms-2">Bergabung Sejak</span></i>
                  </div>
                  <div class="profileit">
                    <i class="bi bi-cash"><span class="ms-2">Saldo</span></i>
                  </div>
                  <div class="profileit mb-4">
                    <i class="bi bi-star-fill"><span class="ms-2">Level</span></i>
                  </div>
                </li>
                <li>
                  <div class="profileisi2">

                    {{$item->name}}
                  </div>
                  <div class="profileisi2">
                    {{$item->created_at->toDateString()}}
                  </div>
                  <div class="profileisi2">
                    -
                  </div>
                  <div class="profileisi2">
                    {{$item->level}}
                  </div>
                </li>
              </ul>
            </div>
            <!-- akhir profiledetail -->
          </div>
          @endforeach
          
          <!-- Tabel Skill -->
          <div class="mt-5">
            {{-- <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="pt-2">Translate Skills</h6>
              </li>

              <li class="list-group-item d-flex flex-column">
                <div class="skill ms-1 pb-3">
                  <div class="TranslateSkill">Indonesia</div>
                  <div class="TranslateSkill">English</div>
                  <div class="TranslateSkill">Japan</div>
                </div>
              </li>
            </ul> --}}
          </div>
          <!-- Akhir Tabel Skill -->
        </div>
        <div class="col-md-8">
          <!-- order -->
          <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4 ">
            @if(Auth::user()->level == 'Client')

            <a class="flex-sm-fill text-sm-center nav-link active" id="pending-tab" data-bs-toggle="tab"
              href="#pending" role="tab" aria-controls="pending" aria-selected="true">Pending</a>
              @endif
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all"
              role="tab" aria-controls="orders-all" aria-selected="false">Active</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
              href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Complete</a>
          </nav>
          <div class="tab-content" id="orders-table-tab-content">

            @if(Auth::user()->level == 'Client')
            <!-- akhirorder -->
            <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
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
                          @foreach ($data['pending'] as $row)
                        <tr>
                          <td class="cell">#{{$row->id}}</td>
                          <td class="cell"><span class="truncate">{{$row->nama_job}}</span>
                          </td>
                          <td class="cell">{{$row->users->name}}</td>
                          <td class="cell"><span class="badge bg-danger">pending</span></td>
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
                  <li class="page-item <?php $data['pending']->setPageName('pending'); if($data['pending']->onFirstPage()){echo 'disabled';}else{echo '';}?>">
                    <a class="page-link" href="{{$data['pending']->previousPageUrl()}}" tabindex="-1" <?php if($data['pending']->onFirstPage()){echo 'aria-disabled="true"';}else{echo 'aria-disabled="false"';}?>>Previous</a>
                  </li>
                  <li class="page-item <?php if($data['pending']->nextPageUrl() == null){echo 'disabled';}else{echo '';}?>">
                    <a class="page-link" href="{{$data['pending']->nextPageUrl()}}">Next</a>
                  </li>
                </ul>
              </nav>
              <!--//app-pagination-->
            </div>
            @endif
            
            <div class="tab-pane fade " id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
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
                          <td class="cell"><span class="badge bg-warning">Progress</span></td>
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