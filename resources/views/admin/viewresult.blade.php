@extends('admin.layout.admin-app')

@section('styles')
    <link href="/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                                <li class="breadcrumb-item active">{{ ucfirst($result->type) }} Results</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    @include('admin.flash-message')
                    <div class="card">
                    <form method="POST" action="/add/result" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input class="form-control" type="text" value="{{ $result->id }}" name="id" hidden required>
                            <div class="mb-3 row">
                                <label for="text-input" class="col-md-2 col-form-label">Result File (.xlsx)</label>
                                <div class="col-md-10">
                                    <input class="form-control" required type="file" name="result_file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" id="text-input">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light w-50">Upload Result
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @include('admin.flash-message')
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Registration number</th>
                                        <th>Name</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($applicants as $applicant)
                                    <tr>
                                        <td>{{ ($applicant->created_at)}}</td>
                                        <td>{{ $applicant->applications->user->reg_no }}</td>
                                        <td>{{ $applicant->applications->lastname.' '.$applicant->applications->firstname }}</td>
                                        <td>{{ $applicant->score }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>



        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

        @include('admin.panel.footer')


</div>
@endsection

@push('scripts')
        <script src="/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="/admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Required datatable js -->
        <script src="/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="/admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="/admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="/admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="/admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="/admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="/admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="/admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="/admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="/admin/assets/js/pages/datatables.init.js"></script>


@endpush

@push('charts')
        <script src="/admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="/admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="/admin/assets/js/pages/dashboard.init.js"></script>

        <script src="/admin/assets/js/app.js"></script>
@endpush
