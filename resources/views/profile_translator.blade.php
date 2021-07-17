@extends('nav/nav_landing')
@section('title','Profile')
@section('konten')
<link rel="stylesheet" href="css/translator.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/style.css" />


<body id="jobDetails">
    @foreach ($users as $i)

    @endforeach
    {{-- @foreach ($jobs as $x)

    @endforeach --}}
    <div class="container mt-5">
        <div class="main-body">
            <div class="row gutters-sm">
                <!-- Profil -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <img src="images/users/user-1.jpg" alt="Admin" class="pf1 profile1 text-center"
                                    width="150" />
                                <div class="ps-4 pt-4 text-center">
                                    <h4>{{ $i->nama }}</h4>
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
                                        <i class="bi bi-geo-alt-fill"><span class="ms-2">From</span></i>
                                        {{-- <span class="profileisi">Tesdt</span> --}}
                                    </div>
                                    <div class="profileit">
                                        <i class="bi bi-person-fill"><span class="ms-2">Join Since</span></i>
                                        {{-- <span class="profileisi">Test</span> --}}
                                    </div>
                                    <div class="profileit">
                                        <i class="bi bi-cash"><span class="ms-2">Saldo</span></i>
                                        {{-- <span class="profileisi">Test</span> --}}
                                    </div>
                                    <div class="profileit mb-4">
                                        <i class="bi bi-star-fill"><span class="ms-2">Rating</span></i>
                                        {{-- <span class="profileisi">Test</span> --}}
                                    </div>
                                </li>
                                <li>
                                    <div class="profileisi2">

                                        Test
                                    </div>
                                    <div class="profileisi2">
                                        {{ $i->kota }}
                                    </div>
                                    <div class="profileisi2">
                                        Test
                                    </div>
                                    <div class="profileisi2">
                                        Test
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- akhir profiledetail -->
                    </div>
                    <!-- Tabel Skill -->
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
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
                        </ul>
                    </div>
                    <!-- Akhir Tabel Skill -->
                </div>
                <!-- Akhir Profil -->
                <div class="col-md-8">
                    <!-- order -->
                    <nav id="orders-table-tab"
                        class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4 ">
                        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-active-tab"
                            data-bs-toggle="tab" href="#orders-active" role="tab" aria-controls="orders-active"
                            aria-selected="true">Bids</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-all-tab" data-bs-toggle="tab"
                            href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Active</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                            href="#orders-paid" role="tab" aria-controls="orders-paid"
                            aria-selected="false">Complete</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                            href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
                            aria-selected="false">Cancelled</a>
                    </nav>
                    <div class="tab-content" id="orders-table-tab-content">
                        <div class="tab-pane fade show active" id="orders-active" role="tabpanel"
                            aria-labelledby="orders-paid-tab">
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
                                                    <td class="cell"># 01</td>
                                                    <td class="cell"><span class="truncate">Translate CV</span></td>
                                                    <td class="cell">John Sanders</td>
                                                    <td class="cell"><span class="cell-data">16 Oct</span><span
                                                            class="note">03:16 AM</span></td>
                                                    <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                                    <td class="cell">$96.20</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="#">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="cell">#15345</td>
                                                    <td class="cell"><span class="truncate">Translate CV</span></td>
                                                    <td class="cell">John Sanders</td>
                                                    <td class="cell"><span class="cell-data">16 Oct</span><span
                                                            class="note">03:16 AM</span></td>
                                                    <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                                    <td class="cell">$96.20</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="#">View</a></td>
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
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">#15346</td>
                                                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet
                                                            eget volutpat erat</span>
                                                    </td>
                                                    <td class="cell">John Sanders</td>
                                                    <td class="cell"><span>17 Oct</span><span class="note">2:16
                                                            PM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Completed</span>
                                                    </td>
                                                    <td class="cell">$259.35</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="#">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="cell">#15345</td>
                                                    <td class="cell"><span class="truncate">Consectetur adipiscing
                                                            elit</span></td>
                                                    <td class="cell">Dylan Ambrose</td>
                                                    <td class="cell"><span class="cell-data">16 Oct</span><span
                                                            class="note">03:16 AM</span></td>
                                                    <td class="cell"><span class="badge bg-warning">Progress</span></td>
                                                    <td class="cell">$96.20</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="#">View</a></td>
                                                </tr>

                                                <tr>
                                                    <td class="cell">#15342</td>
                                                    <td class="cell"><span class="truncate">Justo feugiat neque</span>
                                                    </td>
                                                    <td class="cell">Reina Brooks</td>
                                                    <td class="cell"><span class="cell-data">12 Oct</span><span
                                                            class="note">04:23 PM</span></td>
                                                    <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                                    <td class="cell">$59.00</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="#">View</a></td>
                                                </tr>
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
                                        <table class="table mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Order</th>
                                                    <th class="cell">Project Name</th>
                                                    <th class="cell">Customer</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Total</th>
                                                    <th class="cell"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="cell">#15346</td>
                                                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet
                                                            eget volutpat erat</span>
                                                    </td>
                                                    <td class="cell">John Sanders</td>
                                                    <td class="cell"><span>17 Oct</span><span class="note">2:16
                                                            PM</span></td>
                                                    <td class="cell"><span class="badge bg-success">Completed</span>
                                                    </td>
                                                    <td class="cell">$259.35</td>
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="#">View</a></td>
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
                        <!-- akhirorder -->
                        <div class="row gutters-sm">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        @include('includes.footer')
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
        <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
@endsection