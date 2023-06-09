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
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">REFINED</a></li>
                               <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Family List</li>
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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Usertype</th>
                                        <th>Family Circle</th>
                                        <th>Whatsapp Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>{{ $user->user->reg_no }}</td>
                                        <td><p style="text-align: justify; text-justify: inter-word;">{{ ucfirst(str_replace('_', ' ',$user->user->usertype)) }}</p></td>
                                        <td><span class="badge rounded-pill bg-primary">{{ $user->user->family_circle }}</span></td>
                                        <td>{{ $user->user->telegram_link }}</td>
                                        <td>
                                            <div class="dropdown dropdown-topbar d-inline-block">
                                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    @if ($user->user->usertype == 'family_head')
                                                        <a class="dropdown-item" onclick="assignCordinator({{ $user->id }})">Assign Co-ordinator</a>
                                                        <div class="dropdown-divider"></div>
                                                    @endif
                                                    <a class="dropdown-item" onclick="editUser({{ $user->id }})">Edit</a>
                                                    <a class="dropdown-item" onclick="deleteUser({{ $user->id }})">Delete</a>
                                                </div>
                                            </div>
                                        </td>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function reject(id){
                swal({
                    title: "Are you sure you want to reject this application?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: false,
                  })
                  .then((reject) => {
                    if (reject) {
                        let _token   = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "/reject",
                            type:"POST",
                            data:{
                              id:id,
                              _token: _token
                            },

                            success:function(response){
                              console.log(response);
                              if(response) {
                                swal("Poof! Application Rejected Successfully!", {
                                    icon: "success", });

                                location.reload();
                              }
                            },
                        });

                    } else {
                      swal("Application Discarded!");
                    }
                  });
            }
            function pend(id){
                swal({
                    title: "Are you sure you want to pend this application?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: false,
                  })
                  .then((pend) => {
                    if (pend) {
                        let _token   = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "/pend",
                            type:"POST",
                            data:{
                              id:id,
                              _token: _token
                            },

                            success:function(response){
                              console.log(response);
                              if(response) {
                                swal("Poof! Application Pend Successfully!", {
                                    icon: "success", });

                                location.reload();
                              }
                            },
                        });

                    } else {
                      swal("Application Discarded!");
                    }
                  });
            }
        </script>
@endpush

@push('charts')
        <script src="admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="admin/assets/js/pages/dashboard.init.js"></script>

        <script src="admin/assets/js/app.js"></script>
@endpush
