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
                                <li class="breadcrumb-item active">Exam and Test</li>
                            </ol>
                    </div>
                </div>

            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Test</th>
                                        <th>Score</th>
                                        <th>Status</th>
                                        <th>CGPA</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>27/06/2021</td>
                                        <td>Following God's Plan for your life</td>
                                        <td>89%</td>
                                        <td>
                                            <span class="badge badge-pill bg-success">
                                                passed
                                            </span>
                                        </td>
                                        <td>
                                            5.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27/06/2021</td>
                                        <td>Following God's Plan for your life</td>
                                        <td>67%</td>
                                        <td>
                                            <span class="badge badge-pill bg-success">
                                                passed
                                            </span>
                                        </td>
                                        <td>
                                            4.60
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27/06/2021</td>
                                        <td>Following God's Plan for your life</td>
                                        <td>39%</td>
                                        <td>
                                            <span class="badge badge-pill bg-danger">
                                                failed
                                            </span>
                                        </td>
                                        <td>
                                            4.69
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27/06/2021</td>
                                        <td>Following God's Plan for your life</td>
                                        <td>96%</td>
                                        <td>
                                            <span class="badge badge-pill bg-success">
                                                passed
                                            </span>
                                        </td>
                                        <td>
                                            4.89
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>





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
