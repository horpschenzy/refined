@extends('members.layouts.member-app')

@section('styles')
    <link href="../admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                                <li class="breadcrumb-item active">Assignment</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Assignment ID</th>
                                        <th>Topic</th>
                                        <th>Score</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($assignments as $assignment)
                                    <tr>
                                        <td>{{ $assignment->id }}</td>
                                        <td>{{ $assignment->topic }}</td>
                                        <td>{{ 0 }}</td>
                                        <td>
                                            <div class="dropdown dropdown-topbar d-inline-block">
                                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a href="#submitAssignment{{$assignment->id}}"    data-bs-toggle="modal" data-bs-target="#submitAssignment{{$assignment->id}}" class="dropdown-item">Submit Assignment</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="submitAssignment{{$assignment->id}}" tabindex="-1" aria-labelledby="submitAssignment" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="assignToFamily">Submit {{ $assignment->topic }} </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/submit/assignment/{{ $assignment->id }}" method="post" enctype="multipart/form-data" novalidate>
                                                        @csrf
                                                        <div class="card-body">
                                                            <input type="text" value="{{ $assignment->id }}" name="id" hidden>
                                                            <div class="mb-3 row">
                                                                <label for="text-input" class="col-md-4 col-form-label">Assignment</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" required type="file" name="document" id="text-input">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
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

        <!-- Required datatable js -->
        <script src="../admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="../admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="../admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="../admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="../admin/assets/js/pages/datatables.init.js"></script>
        <!-- Magnific Popup-->
        <script src="../admin/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- lightbox init js-->
        <script src="../admin/assets/js/pages/lightbox.init.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            function deleteAssignment(id)
            {
                swal({
                    title: "Are you sure you want to delete this assignment?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((delete_stream) => {
                    if (delete_stream) {
                        let _token   = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "/delete/assignment",
                            type:"POST",
                            data:{
                              id:id,
                              _token: _token
                            },

                            success:function(response){
                              console.log(response);
                              if(response) {
                                swal("Poof! Assignment Deleted Successfully!", {
                                    icon: "success", });

                                location.reload();
                              }
                            },
                        });

                    } else {
                      swal("Assignment Discarded!");
                    }
                  });
            }
        </script>

@endpush

@push('charts')
        <script src="../admin/assets/js/app.js"></script>
@endpush
