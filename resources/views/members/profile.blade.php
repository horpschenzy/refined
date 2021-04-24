@extends('members.layouts.member-app')

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
                                <li class="breadcrumb-item active">Resources</li>
                            </ol>
                    </div>
                </div>

            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Profile</h4>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
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
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="profile1" role="tabpanel">
                                     <div class="card">
                                      <div class="card-body">
                                        <form class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" name="firstname" placeholder="First name" value="Mark" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" name="lastname" placeholder="Last name" value="Otto" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                     <div class="mb-3">
                                                        <label class="form-label">E-Mail</label>
                                                        <div>
                                                            <input type="email" class="form-control" name="email" required                                                                      parsley-type="email" value="Enter a valid e-mail"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Date of Birth</label>
                                                        <input type="date" class="form-control" id="validationCustom03" name="dob" placeholder="City" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">State</label>
                                                        <input type="text" class="form-control" id="validationCustom04" name="state" placeholder="State" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="mb-3 position-relative">
                                                    <label class="form-label" for="validationTooltipUsername">Username</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationTooltipUsername" name="username" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                                        <div class="invalid-tooltip">
                                                        Please choose a unique and valid username.
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                         <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">Upload Image</label>
                                                        <input type="file" class="form-control" id="validationCustom04" name="image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane p-3" id="settings1" role="tabpanel">
                                      <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">Current Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="description">
                                            </div>
                                    </div>
                                     <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">New Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="description">
                                            </div>
                                    </div>
                                     <div class="mb-3 row">
                                            <label for="description" class="col-md-2 col-form-label">Confirm New Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="description">
                                            </div>
                                    </div>
                                      <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
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
