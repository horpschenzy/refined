@extends('admin.layout.admin-app')

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
                                <h6 class="text-uppercase mb-3 font-size-16 text-white">Reject Applicants</h6>
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

            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Application Request</h4>

                            <div class="table-responsive">
                                <table class="table align-middle table-centered table-vertical table-nowrap mb-1">

                                    <tbody>
                                        <thead>
                                            <th>Image</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
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
                                        @foreach ($applicants as $applicant)
                                        <tr>
                                            <td> <img src="images/{{ $applicant->picture }}" alt="user-image" class="avatar-xs me-2 rounded-circle" /></td>
                                            <td>{{$applicant->firstname}} </td>
                                            <td>{{$applicant->lastname}}</td>
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
                                                        <a class="dropdown-item" href="#">Accept</a>
                                                        <a class="dropdown-item" href="#">Pend</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item"  href="#">Reject</a>
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

@endpush

@push('charts')
        <script src="admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="admin/assets/js/pages/dashboard.init.js"></script>

        <script src="admin/assets/js/app.js"></script>
@endpush
