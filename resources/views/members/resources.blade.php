@extends('members.layouts.member-app')

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
                                <li class="breadcrumb-item active">Resources</li>
                            </ol>
                    </div>
                </div>

            </div>
            <!-- end page title -->







            <!-- end main content-->

        </div>

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

@endpush

@push('charts')
        <script src="../admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="../admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="../admin/assets/js/pages/dashboard.init.js"></script>

        <script src="../admin/assets/js/app.js"></script>
@endpush
