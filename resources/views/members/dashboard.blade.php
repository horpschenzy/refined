@extends('members.layouts.member-app')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
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
                            <li class="breadcrumb-item active">Welcome, {{ auth()->user()->application->firstname }}
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                        <div class="">
                            <div class="">

                                <h6>Dearly Beloved <span style="text-transform: capitalize">{{
                                        auth()->user()->application->firstname }}</span>
                                </h6>,
                                <p>I am glad to welcome you on board the REFINED mentoring course for women in Ministry.
                                    <br> You are in for a life changing encounter.
                                    <strong>Get ready to be REFINED!</strong>
                                <h6>Pastor Funke Obadje.</h6>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card alert  alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                        <div class="card-body">
                            <h4 class="card-title">Welcome Message</h4>
                            <p class="card-title-desc">Opening words from the convener REFINED</p>

                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-21x9">
                                <iframe src="https://www.youtube.com/embed/UwxrUNwlonE" width="640"
                                    height="360" title="Opening words from the convener REFINED" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- end col -->


                <div class="col-md-12 mb-5">
                    <div class="card card-body alert alert-danger alert-dismissible fade show mb-0" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                        <h6>Terms and Conditions <span style="text-transform: capitalize">{{
                                auth()->user()->application->firstname }}</span>
                        </h6>,
                        <ul>
                            <li>You are expressly <span style="text-transform: uppercase; color: red"> prohibited
                                </span> from sharing your private log-in access with others who are not part of the
                                School</li>
                            <li>ONLY posts related to the course are allowed on the telegram groups.</li>
                            <li>Sharing of course content such as links to live teaching sessions, voice notes etc is
                                <strong>NOT ALLOWED</strong>.
                            </li>
                            <li>Unnecessary posts and Broadcast Messages are discouraged on the group. </li>
                        </ul>
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
                                            <td>June - 29th <br>
                                                July – 6th, 13th, 20th, 27th <br>
                                                August - 3rd, 10th, 17th, 24th, 31st <br>
                                            </td>
                                            <td>6pm-8pm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Seminars/Book Review</th>
                                            <td>Mondays</td>
                                            <td>July - 3th, 10th, 17th, 24th, 31st <br>
                                                August – 7th, 14th, 21st, 28th <br>
                                                September - 4th
                                            </td>
                                            <td>6pm-7pm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Vigils</th>
                                            <td>Fridays</td>
                                            <td>June – 30th <br />
                                                July – 7th, 21st, 28th
                                            </td>
                                            <td>12am-12:30am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Vigils</th>
                                            <td>Fridays</td>
                                            <td> August – 4th, 18th, 25th <br>
                                                September – 1st
                                            </td>
                                            <td>12:00am-1:00am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Vigils</th>
                                            <td>Fridays</td>
                                            <td> July - 14th <br />
                                                August – 10th <br>
                                                September – 10th
                                            </td>
                                            <td>10:30pm-12:30am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Time-out with PFO</th>
                                            <td>Monday</td>
                                            <td>11th September</td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>



<script>
    @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
</script>
@endpush

@push('charts')
<script src="../admin/assets/libs/morris.js/morris.min.js"></script>
<script src="../admin/assets/libs/raphael/raphael.min.js"></script>

<script src="../admin/assets/js/pages/dashboard.init.js"></script>

<script src="../admin/assets/js/app.js"></script>
@endpush