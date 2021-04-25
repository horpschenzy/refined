@extends('admin.layout.admin-app')

@section('styles')
    <link href="admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                                <li class="breadcrumb-item active">Results</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="card">
                <div class="card-body card-form__body">
                    <form action="#">
                        <div class="mb-3 row">
                            <label for="example-url-input" class="col-md-2 col-form-label">Select Test</label>
                            <div class="col-md-10">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select test</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Vimeo">Vimeo</option>
                                    <option value="Mixlr">Mixlr</option>
                                  </select>
                            </div>
                        </div>
                        <button class="btn btn-primary text-center"> Generate Result</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Registration number</th>
                                        <th>Name</th>
                                        <th>Score</th>
                                        <th>Status</th>
                                        <th>CGPA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>27/06/2021</td>
                                        <td>REF/2021/0001</td>
                                        <td>Smith Kanyinsola</td>
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
                                        <td>REF/2021/0021</td>
                                        <td>Moyo Olayele</td>
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
                                        <td>REF/2021/0301</td>
                                        <td>Monife Godwin</td>
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
                                        <td>REF/2021/0381</td>
                                        <td>Folake Tijani</td>
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
        <script src="admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Required datatable js -->
        <script src="admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="admin/assets/js/pages/datatables.init.js"></script>


@endpush

@push('charts')
        <script src="admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="admin/assets/js/pages/dashboard.init.js"></script>

        <script src="admin/assets/js/app.js"></script>
@endpush
