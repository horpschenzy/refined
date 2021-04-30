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
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                               {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> --}}
                                <li class="breadcrumb-item active">Edit Profile</li>
                            </ol>
                    </div>
                </div>

            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    @include('admin.flash-message')
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Profile</h4>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                @if(Auth::user()->usertype != 'admin')
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#profile1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Applicant Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Reset Password</span>
                                    </a>
                                </li>

                                @else
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#settings1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Reset Password</span>
                                    </a>
                                </li>
                                @endif
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                @if(Auth::user()->usertype != 'admin')
                                <div class="tab-pane active p-3" id="profile1" role="tabpanel">
                                     <div class="card">
                                      <div class="card-body">
                                        <form class="needs-validation" method="POST" action="/edit/profile" enctype="multipart/form-data" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" name="firstname" placeholder="First name" value="{{ $applicant->firstname }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="lastname" placeholder="Last name" value="{{ $applicant->lastname }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                     <div class="mb-3">
                                                        <label class="form-label">E-Mail</label>
                                                        <div>
                                                            <input type="email" class="form-control" name="email" required parsley-type="email" value="{{ $applicant->email }}"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Phone Number</label>
                                                        <input type="text" class="form-control" id="validationCustom03" name="phone" placeholder="Phone Number" value="{{ $applicant->phone }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Country</label>
                                                        <input type="text" class="form-control" id="validationCustom04" name="country" placeholder="Country" required value="{{ $applicant->country }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">State</label>
                                                        <input type="text" class="form-control" id="validationCustom04" name="state" placeholder="State" value="{{ $applicant->state }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Upload Image</label>
                                                        <input type="file" class="form-control" id="validationCustom04" name="picture">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane p-3" id="settings1" role="tabpanel">
                                    <form class="needs-validation" method="POST" action="/change/password" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">Current Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" value="" required name="password">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">New Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" value="" required name="newpassword">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">Confirm New Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" value="" required name="confirmpassword">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                                @else
                                <div class="tab-pane active p-3" id="settings1" role="tabpanel">
                                    <form class="needs-validation" method="POST" action="/change/password" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">Current Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" value="" required name="password">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">New Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" value="" required name="newpassword">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">Confirm New Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" value="" required name="confirmpassword">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!-- end main content-->

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
