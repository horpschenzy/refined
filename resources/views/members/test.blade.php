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
                                <li class="breadcrumb-item active">Test</li>
                            </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                @include('admin.flash-message')
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Test ID</th>
                                        <th>Topic</th>
                                        <th>Link</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($tests as $test)
                                    <tr>
                                        <td>{{ $test->id }}</td>
                                        <td>{{ $test->topic }}</td>
                                        <td>
                                            @if ($test->submissions && isset($test->submissions[0]))
                                                DONE
                                            @else
                                            <a href="{{ $test->url }}" target="_blank">{{ $test->url }}</a>
                                            @endif
                                        </td>
                                        <td>{{ ($test->submissions) ? $test->submissions[0]->score ?? 0 : 0   }}</td>
                                    </tr>
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
