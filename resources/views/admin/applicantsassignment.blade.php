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
                                <li class="breadcrumb-item active">Submissions</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    @include('admin.flash-message')
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Reg No</th>
                                        <th>Document</th>
                                        <th>Text</th>
                                        <th>Score</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($applicants as $applicant)
                                    <tr>
                                        <td>{{ $applicant->applications->user->reg_no }}</td>
                                        <td>
                                            @if ($applicant->document)

                                            <a href="/images/application_assignment/{{$applicant->document}}" target="_blank" class="btn btn-primary btn-sm">View document</a></td>
                                            @endif
                                        <td>{{ $applicant->text }}</td>
                                        <td>{{($applicant->score)? $applicant->score : 0 }}</td>
                                        <td>
                                            <div class="dropdown dropdown-topbar d-inline-block">
                                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                    <a href="#markAssignment{{$applicant->id}}"    data-bs-toggle="modal" data-bs-target="#markAssignment{{$applicant->id}}" class="dropdown-item">Mark Assignment</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="markAssignment{{$applicant->id}}" tabindex="-1" aria-labelledby="markAssignment" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">Mark Assignment</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/mark/assignment/{{$applicant->id}}" method="post">
                                                    @csrf
                                                    <label for="familyName">Score</label>
                                                    <input type="number" name="score" class="form-control" required>
                                                    <div class="modal-footer">
                                                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                          </div>
                                        </div>
                                      </div>
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
