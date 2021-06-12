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
            </div>
            <!-- end page title -->


            @if (auth()->user()->usertype == 'admin')
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-multiple float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Applicants</h6>
                                <h2 class="mb-4 text-white">{{ $countapplicants['all'] }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-success">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-multiple float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Accepted Members</h6>
                                <h2 class="mb-4 text-white">{{ $countapplicants['approved'] }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-danger">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-multiple float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Rejected Applicants</h6>
                                <h2 class="mb-4 text-white">{{ $countapplicants['rejected'] }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mini-stat bg-warning">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-multiple float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Pending for Review</h6>
                                <h2 class="mb-4 text-white">{{  $countapplicants['pending']  }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif


            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">{{(auth()->user()->usertype == 'admin') ? 'Approved Application' : 'Applicants' }}</h4>
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <th>Image</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Reg No.</th>
                                        <th>Gender</th>
                                        <th>Age Range</th>
                                        <th>Pastor's Wife</th>
                                        <th>Marital Status</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Means of communication</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Born Again</th>
                                        <th>Spirit Filled</th>
                                        <th>Church</th>
                                        <th>SETMAN/G.O</th>
                                        <th>Ad Source</th>
                                        <th>Previously denied admission</th>
                                        <th>Refined before</th>
                                        <th>What year</th>
                                        <th>Complete and Graduate</th>
                                        <th>Retake</th>
                                        <th>Expectation</th>
                                        <th>Action</th>

                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $applicant)
                                        <tr>
                                            <td> <img src="images/{{ $applicant->picture }}" alt="user-image" class="avatar-xs me-2 rounded-circle" /></td>
                                            <td>{{$applicant->firstname}} </td>
                                            <td>{{$applicant->lastname}}</td>
                                            <td>{{$applicant->user->reg_no}}</td>
                                            <td>{{$applicant->gender}}</td>
                                            <td>{{$applicant->agerange}}</td>
                                            <td>{{ucfirst($applicant->pastor_wife)}}</td>
                                            <td>{{ucfirst($applicant->maritalstatus)}}</td>
                                            <td>{{$applicant->email}}</td>
                                            <td>{{$applicant->phone}}</td>
                                            <td><span class="badge rounded-pill bg-primary">{{$applicant->prefer_com}}</span></td>
                                            <td>
                                                {{$applicant->country}}
                                            </td>
                                            <td>
                                                {{$applicant->state}}
                                            </td>
                                            <td>{{ucfirst($applicant->born_again)}}</td>
                                            <td>{{ucfirst($applicant->holyghost)}}</td>
                                            <td>{{ucfirst($applicant->church)}}</td>
                                            <td>{{ucfirst($applicant->setman)}}</td>
                                            <td>{{ucfirst($applicant->advert)}}</td>
                                            <td>{{ucfirst($applicant->denied_admission)}}</td>
                                            <td>{{ucfirst($applicant->take_refined)}}</td>
                                            <td> {{ucfirst($applicant->yearofattendance)}} </td>
                                            <td> {{ucfirst($applicant->graduate_refined)}} </td>
                                            <td>{{ucfirst($applicant->retake)}} </td>
                                            <td> {{ucfirst($applicant->expectation)}} </td>
                                            <td>
                                                <div class="dropdown dropdown-topbar d-inline-block">
                                                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action <i class="mdi mdi-chevron-down"></i>
                                                        </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        @if(auth()->user()->usertype == 'admin')
                                                            <a class="dropdown-item" onclick="accept({{ $applicant->id }})">Accept</a>
                                                            <a class="dropdown-item" onclick="pend({{ $applicant->id }})">Pend</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" onclick="reject({{ $applicant->id }})">Reject</a>
                                                            <a class="dropdown-item" onclick="deleteApplicant({{ $applicant->id }})">Delete</a>

                                                        @endif
                                                        <a class="dropdown-item" >Reset Password</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                           <span class="text-right">{{ $applicants->links() }}</span>
                        </div>
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
                                        <tr>
                                            <th scope="row">Vigils</th>
                                            <td>Fridays</td>
                                            <td>2nd Schedule <br>
                                                July – 30th
                                                August – 6th, 20th, 27th
                                                September – 3rd
                                                </td>
                                            <td>12am-1:00am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Vigils</th>
                                            <td>Fridays</td>
                                            <td>3rd Schedule (2nd Fridays of the month) <br>
                                                June – 11th
                                                July – 9th
                                                August – 13th
                                                September – 10th
                                                </td>
                                            <td>11:00am-1:00am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Special Meetings Married and Singles special </th>
                                            <td>Monday</td>
                                            <td>06/09/2021</td>
                                            <td>6pm -7pm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Time out with Pastor Funke Obadje</th>
                                            <td>Thursday</td>
                                            <td>09/09/2021</td>
                                            <td>6pm -8pm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end page Time Table -->
            <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#assignToFamily">
    Launch demo modal
  </button> --}}

  <!-- Modal -->

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
        {{-- <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script> --}}

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
            function deleteApplicant(id)
            {
                swal({
                    title: "Are you sure you want to delete this application?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((delete_applicant) => {
                    if (delete_applicant) {
                        let _token   = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "/delete",
                            type:"POST",
                            data:{
                              id:id,
                              _token: _token
                            },

                            success:function(response){
                              console.log(response);
                              if(response) {
                                swal("Poof! Application Deleted Successfully!", {
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
            function accept(id){
                swal({
                    title: "Are you sure you want to accept this application?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: false,
                  })
                  .then((accept) => {
                    if (accept) {
                        let _token   = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "/accept",
                            type:"POST",
                            data:{
                              id:id,
                              _token: _token
                            },

                            success:function(response){
                              console.log(response);
                              if(response) {
                                swal("Poof! Application Accepted Successfully!", {
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
