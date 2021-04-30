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
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                               {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> --}}
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div>
                            <div class="directory-bg text-center">
                                <div class="directory-overlay">
                                    <img class="rounded-circle avatar-lg img-thumbnail" src="admin/assets/images/users/user-2.jpg" alt="Generic placeholder image">
                                </div>
                            </div>

                            <div class="directory-content text-center p-4">
                                <p class=" mt-4">Creative Director</p>
                                <h5 class="font-size-16">Katherine J. McAvoy</h5>

                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>

                                <ul class="social-links list-inline mb-0 mt-4">
                                    <li class="list-inline-item">
                                        <a href="" class="btn-primary"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-danger"><i class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div>
                            <div class="directory-bg text-center">
                                <div class="directory-overlay">
                                    <img class="rounded-circle avatar-lg img-thumbnail" src="admin/assets/images/users/user-3.jpg" alt="Generic placeholder image">
                                </div>
                            </div>

                            <div class="directory-content text-center p-4">
                                <p class=" mt-4">Creative Director</p>
                                <h5 class="font-size-16">Richard L. Jackson</h5>
                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>

                                <ul class="social-links list-inline mb-0 mt-4">
                                    <li class="list-inline-item">
                                        <a href="" class="btn-primary"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-danger"><i class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div>
                            <div class="directory-bg text-center">
                                <div class="directory-overlay">
                                    <img class="rounded-circle avatar-lg img-thumbnail" src="admin/assets/images/users/user-4.jpg" alt="Generic placeholder image">
                                </div>
                            </div>

                            <div class="directory-content text-center p-4">
                                <p class=" mt-4">Creative Director</p>
                                <h5 class="font-size-16">Joshua D. Pearson</h5>
                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>

                                <ul class="social-links list-inline mb-0 mt-4">
                                    <li class="list-inline-item">
                                        <a href="" class="btn-primary"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-danger"><i class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div>
                            <div class="directory-bg text-center">
                                <div class="directory-overlay">
                                    <img class="rounded-circle avatar-lg img-thumbnail" src="admin/assets/images/users/user-5.jpg" alt="Generic placeholder image">
                                </div>
                            </div>

                            <div class="directory-content text-center p-4">
                                <p class=" mt-4">Creative Director</p>
                                <h5 class="font-size-16">Michael J. Folma</h5>
                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>

                                <ul class="social-links list-inline mb-0 mt-4">
                                    <li class="list-inline-item">
                                        <a href="" class="btn-primary"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-danger"><i class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div>

                            <div class="directory-bg text-center">
                                <div class="directory-overlay">
                                    <img class="rounded-circle avatar-lg img-thumbnail" src="admin/assets/images/users/user-6.jpg" alt="Generic placeholder image">
                                </div>
                            </div>

                            <div class="directory-content text-center p-4">
                                <p class=" mt-4">Creative Director</p>
                                <h5 class="font-size-16">Samuel P. Augustus</h5>
                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>

                                <ul class="social-links list-inline mb-0 mt-4">
                                    <li class="list-inline-item">
                                        <a href="" class="btn-primary"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-danger"><i class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div>
                            <div class="directory-bg text-center">
                                <div class="directory-overlay">
                                    <img class="img-thumbnail rounded-circle avatar-lg" src="admin/assets/images/users/user-7.jpg" alt="Generic placeholder image">
                                </div>
                            </div>

                            <div class="directory-content text-center p-4">
                                <p class=" mt-4">Creative Director</p>
                                <h5 class="font-size-16">Joseph D. Starnes</h5>
                                <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>

                                <ul class="social-links list-inline mb-0 mt-4">
                                    <li class="list-inline-item">
                                        <a href="" class="btn-primary"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-danger"><i class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="btn-info"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
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


@endpush

@push('charts')
        <script src="admin/assets/libs/morris.js/morris.min.js"></script>
        <script src="admin/assets/libs/raphael/raphael.min.js"></script>

        <script src="admin/assets/js/pages/dashboard.init.js"></script>

        <script src="admin/assets/js/app.js"></script>
@endpush



