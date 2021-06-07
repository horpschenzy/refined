@extends('members.layouts.member-app')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
@endsection
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4>Dashboard</h4>
                            <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                               {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> --}}
                                <li class="breadcrumb-item active">Welcome, {{ auth()->user()->application->firstname }}</li>
                            </ol>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                       <h6>Dearly Beloved <span style="text-transform: capitalize">{{ auth()->user()->application->firstname }}</span></h6>,
                        <p>I am glad to welcome you on board the REFINED mentoring course for
                            women in Ministry. <br> You are in for a life changing encounter.
                            <strong>Get ready to be REFINED!</strong>
                            <h6>Pastor Funke Obadje.</h6> </p>
                    </div>
                    <div class="card card-body">
                        <h6>Terms and Conditions <span style="text-transform: capitalize">{{ auth()->user()->application->firstname }}</span></h6>,
                         <ul>
                             <li>You are expressly <span style="text-transform: uppercase; color: red"> prohibited </span> from sharing your private log-in access with others who are not part of the School</li>
                             <li>ONLY posts related to the course are allowed on the telegram groups.</li>
                             <li>Sharing of course content such as links to live teaching sessions, voice notes etc is <strong>NOT ALLOWED</strong>.</li>
                             <li>Unnecessary posts and Broadcast Messages are discouraged on the group. </li>
                         </ul>
                     </div>
                </div>
            </div>
            <!-- Time Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">COURSE SCHEDULE</h4>

                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">

                                    <thead>
                                        <tr>
                                            <th>SCHEDULE</th>
                                            <th>DAY</th>
                                            <th>DATE</th>
                                            <th>TIME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Main Teachings</th>
                                            <td>Thursdays</td>
                                            <td>June - 10th , 17th, 24th <br>
                                                July – 1st, 8th, 15th , 22nd, 29th <br>
                                                August - 5th, 12th, 19th, 26th <br>
                                                September – 2nd, 9th
                                                </td>
                                            <td>6pm-8pm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Seminars/Book Review</th>
                                            <td>Mondays</td>
                                            <td>June – 14th, 21st, 28th <br>
                                                July - 5th, 12th, 19th, 26th  <br>
                                                August – 2nd, 9th, 16th, 23rd. 30th <br>
                                                September - 6th, 13th
                                                </td>
                                            <td>6pm-7pm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Vigils</th>
                                            <td>Fridays</td>
                                            <td>1st Schedule <br>
                                                June – 18th & 25th <br>
                                                July – 2nd, 16th & 23rd
                                                </td>
                                            <td>12am-12:30am</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            {{-- <h4 class="card-header__title mb-3">Test Scores</h4>

            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-cube-outline float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Test 1</h6>
                                <h2 class="mb-4 text-white">87%</h2>
                                <span class="badge bg-success">87% </span> <span class="ms-2">Excellent</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-buffer float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Test 2</h6>
                                <h2 class="mb-4 text-white">32%</h2>
                                <span class="badge bg-danger"> 32% </span> <span class="ms-2">You Failed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-tag-text-outline float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Test 3</h6>
                                <h2 class="mb-4 text-white">50%</h2>
                                <span class="badge bg-warning"> 50% </span> <span class="ms-2">Average Performance</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-briefcase-check float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Test 4</h6>
                                <h2 class="mb-4 text-white">89%</h2>
                                <span class="badge bg-success">+89% </span> <span class="ms-2">Excellent performance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body text-center">
                        <h3 class="card-title">Pre-Class Test</h3>
                        <p class="card-text">Without taking this test you cannot start the next class.
                        </p>
                        <a href="{{route('member.examandtest')}}" class="btn btn-primary waves-effect waves-light">Start Now</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-multiple float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Account Number</h6>
                                <h4 class="mb-4 text-white">1015899501</h4>
                                <span class="ms-2">Oluwaseun Olayide</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-cash float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Investment</h6>
                                <h2 class="mb-4 text-white">&#x20A6;6,782,800</h2>
                                <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-cash-plus float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Monthly Earnings</h6>
                                <h2 class="mb-4 text-white">&#x20A6;18,670.95</h2>
                                <span class="badge bg-warning"> 0% </span> <span class="ms-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-briefcase-check float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Active Loans</h6>
                                <h2 class="mb-4 text-white">0</h2>
                                <span class="badge bg-info"> 0% </span> <span class="ms-2">For 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Recent Transactions</h4>

                            <div class="table-responsive">
                                <table class="table align-middle table-centered table-vertical table-nowrap">

                                    <tbody>
                                        <thead>
                                            <th>Date</th>
                                            <th>Transaction Detail</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th></th>
                                        </thead>
                                        <tr>
                                            <td>
                                                06 March 2021
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Joining Fee
                                                <p class="m-0 text-muted font-14">CASH DEPOSIT-Voucher # : CASH DEPOSIT-Voucher #</p>
                                            </td>
                                            <td>
                                                CREDIT
                                            </td>
                                            <td>
                                                &#x20A6;100,000
                                            </td>
                                            <td>
                                               <a href="#" class="btn btn-primary">View</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                06 April 2021
                                            </td>
                                            <td>
                                                <i class="mdi mdi-checkbox-blank-circle text-success"></i> Monthly Subscription
                                                <p class="m-0 text-muted font-14">TRANSFER CREDIT : Ops_Monthly Subscription payment Month_Oluwaseun Olayide_06-04-2021</p>
                                            <td>
                                                CREDIT
                                            </td>
                                            <td>
                                                &#x20A6;100,000
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary">View</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div> --}}
            <!-- end row -->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

        @include('admin.panel.footer')


</div>
@endsection

@push('scripts')
        <script src="../admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="../admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="../admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>



        <script>
            @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>
@endpush

@push('charts')
        <script src="../admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="../admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="../admin/assets/js/pages/dashboard.init.js"></script>

        <script src="../admin/assets/js/app.js"></script>
@endpush
