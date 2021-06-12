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
                               {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> --}}
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-2">
                    <a href="/send-mail" class="btn btn-primary btn-sm"> SEND MAIL </a>
                </div>
            </div>
            <!-- end page title -->



            <div class="row">

                <div class="col-xl-12">
                    @include('admin.flash-message')
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Approved Applicants</h4>

                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <th>Image</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Assigned to Family</th>
                                        <th>Gender</th>
                                        <th>Family Circle</th>
                                        <th>Reg No.</th>
                                        <th>Pastor's Wife</th>
                                        <th>Marital Status</th>
                                        <th>Phone number</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>SETMAN/G.O</th>
                                        <th>Age Range</th>
                                        <th>Church</th>
                                        <th>Refined Before?</th>
                                        <th>Action</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $applicant)
                                        <tr>
                                            <td> <img src="images/{{ $applicant->picture }}" alt="user-image" class="avatar-xs me-2 rounded-circle" /></td>
                                            <td>{{$applicant->firstname}} </td>
                                            <td>{{$applicant->lastname}}</td>
                                            <td>{{ ($applicant->assign) ? 'YES' : 'NO' }}</td>
                                            <td><span>{{$applicant->gender}}</span></td>
                                            <td><span class="badge rounded-pill bg-primary">{{($applicant->circle) ? $applicant->circle->user->family_circle : '' }}</span></td>
                                            <td>{{$applicant->user->reg_no}}</td>
                                            <td>{{ucfirst($applicant->pastor_wife)}}</td>
                                            <td>{{ucfirst($applicant->maritalstatus)}}</td>
                                            <td>{{$applicant->phone}}</td>
                                            <td>
                                                {{$applicant->country}}
                                            </td>
                                            <td>
                                                {{$applicant->state}}
                                            </td>
                                            <td>{{ucfirst($applicant->setman)}}</td>
                                            <td>{{ucfirst($applicant->agerange)}}</td>
                                            <td>{{ucfirst($applicant->church)}}</td>
                                            <td>{{ucfirst($applicant->take_refined)}}</td>
                                            <td>
                                                <div class="dropdown dropdown-topbar d-inline-block">
                                                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action <i class="mdi mdi-chevron-down"></i>
                                                        </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" onclick="pend({{ $applicant->id }})">Pend</a>
                                                        <div class="dropdown-divider"></div>
                                                        @if (!$applicant->assign)

                                                        <a href="#assignToFamily{{$applicant->id}}"    data-bs-toggle="modal" data-bs-target="#assignToFamily{{$applicant->id}}" class="dropdown-item">Assign to Family</a>
                                                        <div class="dropdown-divider"></div>
                                                        @endif
                                                        <a class="dropdown-item" onclick="reject({{ $applicant->id }})">Reject</a>
                                                        <a class="dropdown-item">Reset Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="assignToFamily{{$applicant->id}}" tabindex="-1" aria-labelledby="assignToFamily" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="assignToFamily">Assign to Family</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/assign/applicant/{{$applicant->id}}" method="post">
                                                        @csrf
                                                        <div>
                                                            <h3>Assign</h3>
                                                            <p> {{$applicant->firstname}} {{$applicant->lastname}}</p>
                                                        </div>
                                                        <label for="familyName">Family Name</label>
                                                        <select class="form-select" name="family_circle" aria-label="Default select example">
                                                          <option selected>Select Family Circle</option>
                                                          @foreach ($family_circles as $family_circle)
                                                            <option value="{{ $family_circle->id }}">{{ $family_circle->family_circle }}</option>
                                                          @endforeach
                                                        </select>
                                                        <div class="modal-footer">
                                                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                            <button type="submit" class="btn btn-primary">Assign</button>
                                                        </div>
                                                    </form>
                                              </div>
                                            </div>
                                          </div>

                                          @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <span class="text-right">{{ $applicants->links() }}</span>
                        </div>
                    </div>
                </div>
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
            // $(document).ready( function () {
            //     $('#datatable-buttons').DataTable( {
            //     "bFilter": false
            //     } );
            // } );

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
